<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserCreate extends Component
{
    public $name;
    public $email;
    public $password;

    protected $rules = [
        'name' => 'required'
    ];

    protected $messages = [
        'name.required' => 'Nome é necessário'
    ];

    public function render()
    {
        return view('livewire.user.user-create');
    }

    public function store(){
        $this->validate();

        User::create([
            'name'=> $this->name,
            'email'=> $this->email,
            'password'=> $this->password,
        ]);

        session()->flash('success', 'Cadastrado com sucesso');
    }
    
}
