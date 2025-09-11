<?php

namespace App\Livewire;

use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateBook extends Component
{
    #[Validate('required')]
    public $title;
    #[Validate('required')]
    public $author;
    #[Validate(['required', 'max:5'])]
    public $rating;

    public function save(): Redirector|RedirectResponse
    {
        \App\Models\Book::create([
            'title' => $this->title,
            'author' => $this->author,
            'rating' => $this->rating,
        ]);

        return redirect('/');

    }

    public function render(): View
    {
        return view('livewire.create-book');
    }
}
