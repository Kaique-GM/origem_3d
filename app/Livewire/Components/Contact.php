<?php

namespace App\Livewire\Components;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
        return view('livewire.components.contact');
    }
}
