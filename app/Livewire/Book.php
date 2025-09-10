<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class Book extends Component
{
    public $book;

    public function mount($id): void
    {
        $this->book = \App\Models\Book::findOrFail($id);
    }


    public function render(): View
    {
        return view('livewire.book');
    }
}
