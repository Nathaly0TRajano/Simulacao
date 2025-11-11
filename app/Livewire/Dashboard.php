<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard', ['user' => Auth::user()]);
    }

    public function logout(){
    Auth::logout(); // nenhum usuário autenticado
    session()->invalidate();
    session()->regenerateToken();

    return redirect()->route('login');
   } 
}
