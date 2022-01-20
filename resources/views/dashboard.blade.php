<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Bootstrap - CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <style>
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
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- You're logged in! -->
                    <div class="list-group">
                        <a href="/searchBook" class="list-group-item list-group-item-action "> Search A Book </a>
                        <a href="{{ route('showallBooks') }}" class="list-group-item list-group-item-action "> Show All Books </a>
                        <a href="/insertBook" class="list-group-item list-group-item-action">Insert A New Book </a>
                        <a href="/editBook" class="list-group-item list-group-item-action">Edit A Book</a>
                        <a href="/deleteBook" class="list-group-item list-group-item-action">Delete A Book</a>
                        <a href="#" class="list-group-item list-group-item-action">Favourite Book's</a>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    <div class="footer">Book Club</div>
</x-app-layout>
