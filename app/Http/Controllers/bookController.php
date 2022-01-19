<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class bookController extends Controller
{

    // Show All Data Function : 1
    // (1) show all books
    public function showall()
    {
        $books = Book::paginate(4);
        return view('book.show', ['data' => $books]);
    }
    


    // for auto complete of search
    public function autocomplete(Request $request)
    {

        $data = Book::select("name")
        ->where("name","LIKE","%{$request->items}%")
        ->get();

        return response()->json($data);
    }

    // show searched Book
    public function search_specfic_book(Request $request)
    {
        // $book = Book::find($request->name);
        $book = DB::select('select * from books where name = :name', ['name' => $request->name]);
        return view('book.search', ['data' => $book, 'layout' => 'show']);
    }


    // Insert Function : 1
    // (1) Insert Book
    public function insert(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'author' => 'required',
            'image' => 'required',
        ]);
        
        $book = new Book();
        $book->name = strtoupper($request->input('name'));
        $book->author = strtoupper($request->input('author'));
        $book->favourite = '0';
        if ($request->hasfile('image')) 
        {
            $file = $request->file('image');
            $extension = $file->getclientoriginalExtension(); // getting image ext
            $filename = time().'.'.$extension;
            $file->move('upload/books/', $filename);
            $book->image = $filename;
        } 
        else 
        {
            $book->image = '';
        }
        $book->save();
        return redirect()->back()->with('status', 'New Book Added Successfully..!!!');
    }

    //  Update Functions : 2
    //  (1) show all books for updation, (2) update the record
    public function showallupdates()
    {
        $books = Book::paginate(4);
        return view('book.edit', ['data' => $books]);
    }
    public function edit($id)
    {
        $data = Book::find($id);
        return view('book.update', ['data' => $data]);
    }
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->name = strtoupper($request->input('name'));
        $book->author = strtoupper($request->input('author'));
        if ($request->hasfile('image')) 
        {
            $file = $request->file('image');
            $extension = $file->getclientoriginalExtension(); // getting image ext
            $filename = time().'.'.$extension;
            $file->move('upload/books/', $filename);
            $book->image = $filename;
        } 
        else 
        {
            return $request;
            $book->image = '';
        }
        $book->save();
        return redirect()->back()->with('status', 'Book Updated Successfully..!!!');
    }


    //  Delete Functions : 2
    // (1) show all books for delection, (2) delete a book record
    public function showalldelete()
    {
        $books = Book::paginate(4);
        return view('book.delete', ['data' => $books]);
    }
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->back()->with('status', 'Book Deleted Successfully..!!!');
    }
}
