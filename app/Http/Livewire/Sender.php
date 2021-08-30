<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Sender extends Component
{

    public $messages;

    public function render()
    {
        return view('livewire.sender');
    }
}
