<?php

namespace App\Livewire;

use App\Models\Book;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class BookList extends Component
{
    use WithPagination;

    public string $name;

    public function destroy(Book $book): void
    {
        $book->delete();
    }

    public function render(): View
    {

        $books = Book::simplePaginate(10);
        $count = $books->count();

        return view('livewire.book-list', ['books' => $books, 'count' => $count]);
    }
}
