<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Search A Book') }}
        </h2>
    </x-slot>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Bootstrap - CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


        
    </head>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Seacrh Books here.!
                    <section style="padding-top:60px; height:55vh;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 offset-md-3">
                                    <div class="card">
                                        <div class="card-header">
                                            Search Book
                                        </div>
                                        <div class="car-body" style="padding-top: 30px; padding-bottom: 40px; padding-left:20px; padding-right:20px">
                                            <form action="{{ url('/search') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                                <div class="form-group">
                                                    <input name="name" type="text" class="form-control typeahead" placeholder="Search...." />
                                                </div>
                                                <!-- <button type="submit"class="btn btn-success">Search</button> -->
                                                <input type="submit" class="btn btn-success" value="Search">
                                            </form>
                                        </div>
                                    </div>            
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Ajax, Jquery CDN links -->
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

                    <script type="text/javascript">
                        var path = "{{ route('autocomplete') }}";
                        $('input.typeahead').typeahead({
                            source: function (terms,process) {
                            return $.get(path, { terms: terms}, function (data) {
                                    return process(data);
                                });
                            }
                        });
                    </script>

                    @if($layout == 'show')
                        <section style="padding-top:60px; height:55vh;">
                            @include("book.searchTwo");
                        </section>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!--  -->
   


   
