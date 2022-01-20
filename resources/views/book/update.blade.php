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
            {{ __('Update A Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(session('status'))
                        <h6 class="alert alert-success">{{ session('status') }}</h6>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">Update the Book's Information</h5>
                        <form action="{{ url('/updateBook/'.$data->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Book ID</label>
                                <input name="name" type="text" value="{{ $data->id }}" class="form-control"  placeholder="Enter Book Name" style="text-transform: uppercase;" readonly>
                            </div>
                            <div class="form-group">
                                <label>Book Name</label>
                                <input name="name" type="text" value="{{ $data->name }}" class="form-control"  placeholder="Enter Book Name" style="text-transform: uppercase;">
                            </div>
                            <div class="form-group pt-2">
                                <label>Author Name</label>
                                <input name="author" type="text" value="{{ $data->author }}" class="form-control"  placeholder="Enter the Author Name" style="text-transform: uppercase;"  autocomplete="firstName">
                            </div>      
                            <div class="form-group pt-2">
                                <label class="form-label" for="customFile">Image</label>
                                <input type="file" name="image" class="form-control" id="customFile">
                            </div>
                            <input type="submit" class="btn btn-info  mt-3" value="Update">
                            <input type="reset" class="btn btn-warning  mt-3" value="Reset">
                        </form>                    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">Book Club</div>
</x-app-layout>
