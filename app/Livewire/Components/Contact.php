<?php

namespace App\Livewire\Components;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $email;
    public $phone;
    public $projectDescription;

    public $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'projectDescription' => 'required|string|max:1000',
    ];

    public $messages = [
        'name.required' => 'O campo nome é obrigatório.',
        'email.required' => 'O campo e-mail é obrigatório.',
        'email.email' => 'Por favor, insira um e-mail válido.',
        'phone.required' => 'O campo telefone é obrigatório.',
        'projectDescription.required' => 'A descrição do projeto é obrigatória.',
    ];

    public function submitForm()
    {
        $this->validate();

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'projectDescription' => $this->projectDescription,
        ];
 
        Mail::send('emails.contact', $data, function ($message) {
            $message->to('kaiquegmoficial@gmail.com')
                ->subject('Novo orçamento - Origem3D');
        });

        session()->flash('success', 'Mensagem enviada com sucesso!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.components.contact');
    }
}
