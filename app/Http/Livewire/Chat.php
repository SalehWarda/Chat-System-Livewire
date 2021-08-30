<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Chat extends Component
{

    public $textMessage='';

    public function render()
    {
        $message = \App\Models\Chat::with('user')->latest()->get()->sortBy('id');
        return view('livewire.chat',compact('message'));
    }


    public function sendMessage(){

        \App\Models\Chat::create([

            'user_id' => auth()->user()->id,
            'message_text' => $this->textMessage
        ]);


        $this->textMessage='';
    }

}
