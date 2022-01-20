<?php

use App\Http\Controllers\bookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('welcome'); });



// dashboard
Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth'])->name('dashboard');


// search books
Route::get('/searchBook', function () { return view('book.search', ['layout' => 'noshow']); })->middleware(['auth'])->name('searchBook');
Route::get('/autocomplete', [bookController::class, 'autocomplete'])->middleware(['auth'])->name('autocomplete');
Route::post('/search', [bookController::class, 'search_specfic_book'])->middleware(['auth'])->name('search');

// show all books
Route::get('/showallBooks', [bookController::class, 'showall'])->middleware(['auth'])->name('showallBooks');

// insert books 
Route::get('/insertBook', function () { return view('book.insert'); })->middleware(['auth'])->name('insertBook');
Route::post('insert', [bookController::class, 'insert']);


// update books 
Route::get('/editBook', [bookController::class, 'showallupdates'])->middleware(['auth'])->name('editBook');
Route::get('/edit/{id}', [bookController::class, 'edit'])->middleware(['auth'])->name('edit');
Route::post('/updateBook/{id}', [bookController::class, 'update'])->middleware(['auth']);



// delete books (done)
Route::get('/deleteBook', [bookController::class, 'showalldelete'])->name('deleteBook')->middleware(['auth']);
Route::get('/delete/{id}', [bookController::class, 'destroy'])->middleware(['auth']);


// favourite books 
Route::get('/favourite/{id}', [bookController::class, 'addfavourite'])->middleware(['auth'])->name('favourite');


require __DIR__.'/auth.php';
