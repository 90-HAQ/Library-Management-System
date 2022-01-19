<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Book Name</th>
            <th scope="col">Author Name</th>
            <th scope="col">Image</th>
        </tr>
    </thead>
    <tbody>
    @foreach($data as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->name }}</td>
            <td>{{ $book->author }}</td>
            <td> <img src="{{ asset('upload/books/'.$book->image) }}" width="100px" height="100px" alt="Image"></td>
        </tr>
    @endforeach
    </tbody>
</table>
   

