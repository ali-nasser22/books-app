<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class CreateBook extends Component
{
    public function render(): View
    {
        return view('livewire.create-book');
    }
}
