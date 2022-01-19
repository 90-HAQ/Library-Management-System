<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Bootstrap - CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show All Book') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(!$data->isEmpty())
                        @if(session('status'))
                            <h6 class="alert alert-success">{{ session('status') }}</h6>
                        @endif
                        Delete Book here!
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Book Name</th>
                                    <th scope="col">Author Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Delete</th>
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
                                        <a href="{{ url('/delete/'.$book->id) }}" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $data->links() !!}    
                    @else
                        {{ __('No Record Left to Delete') }}
                    @endempty
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
