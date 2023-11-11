<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Home extends Component
{
    public $title = "Instantgram";

    public function render()
    {
        return view('livewire.pages.home');
    }
}
