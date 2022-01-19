<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Bootstrap - CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit A Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(!$data->isEmpty())
                        Edit Book here!
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Book Name</th>
                                    <th scope="col">Author Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $book)
                                <tr>
                                    <td>{{ $book->id }}</td>
                                    <td>{{ $book->name }}</td>
                                    <td>{{ $book->author }}</td>
                                    <td> <img src="{{ asset('upload/books/'.$book->image) }}" width="100px" height="100px" alt="Image"></td>
                                    <td>
                                        <a href="{{ url('/edit/'.$book->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $data->links() !!}    
                    @else
                        {{ __('No Record Avaliable to Update') }}
                    @endempty
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
