<?php

use App\Livewire\Book;
use App\Livewire\CreateBook;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books/create', CreateBook::class)->name('books.create');
Route::get('/books/{id}', Book::class)->name('book');
