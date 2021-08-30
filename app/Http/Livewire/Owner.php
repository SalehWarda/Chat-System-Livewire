<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Owner extends Component
{

    public $messages;
    public function render()
    {
        return view('livewire.owner');
    }
}
