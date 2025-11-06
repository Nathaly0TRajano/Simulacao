<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserEdit extends Component
{
    public $name;
    public $email;
    public $password;
    public $userId;

    public function render()
    {
        return view('livewire.user.user-edit');
    }

    public function mount($id)
    {
        $user = User::find($id);

        if ($user) {
            $this->userId = $id;
            $this->name = $user->name;
            $this->email = $user->email;
            // Nunca trazer senha preenchida
        }
    }

    public function update()
    {
        $user = User::find($this->userId);

        if($this->pasword != null){
            $user->password = Hash::make($this->password);
        }

        $user->name = $this->name;
        $user->email = $this->email;

        $user->save();

        session()->flash('success', 'Atualizado com sucesso');
    }
}
