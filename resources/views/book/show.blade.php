<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Bootstrap - CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <style>
            .fa-star
            {
                padding-top: 8px;
                margin-left: 40px;
                font-size: 25px;
            }
            .fa-star:hover
            {
                color: black;
            }
            .footer
            {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-top: 12.2%;
                position: fixed;
                left: 0;
                right: 0;
                height: 40px;
                width: 100%;
                background-color:grey;
                color: whitesmoke;
                font-weight: 600;
                font-size: 18px;;
            }
        </style>
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
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Book Name</th>
                                    <th scope="col">Author Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Add to Favourite</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $book)
                                <tr>
                                    <td>{{ $book->id }}</td>
                                    <td>{{ $book->name }}</td>
                                    <td>{{ $book->author }}</td>
                                    <td> <img src="{{ asset('upload/books/'.$book->image) }}" width="100px" height="100px" alt="Image"></td>
                                    <td> <a href="#"><i class="far fa-star"></i></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                            {!! $data->links() !!}          
                    @else
                        {{ __('No Record of Books Avaliable') }}
                    @endempty
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
