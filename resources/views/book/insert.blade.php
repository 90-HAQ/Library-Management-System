<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Bootstrap - CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Insert A Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(session('status'))
                        <h6 class="alert alert-success">{{ session('status') }}</h6>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">Enter the information of the new book</h5>
                        <form action="{{url('insert')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Book Name</label>
                                <input name="name" type="text" class="form-control"  placeholder="Enter Book Name" style="text-transform: uppercase;">
                            </div>
                            <div class="form-group pt-2">
                                <label>Author Name</label>
                                <input name="author" type="text" class="form-control"  placeholder="Enter the Author Name" style="text-transform: uppercase;"  autocomplete="firstName">
                            </div>      
                            <div class="form-group pt-2">
                                <label class="form-label" for="customFile">Image</label>
                                <input type="file" name="image" class="form-control" id="customFile">
                            </div>
                            <input type="submit" class="btn btn-success mt-3" value="Insert">
                            <input type="reset" class="btn btn-primary  mt-3" value="Reset">
                        </form>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
