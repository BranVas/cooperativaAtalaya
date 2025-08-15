<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Component
{

     public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:8',
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->regenerate(); // importante para seguridad
            return redirect()->intended('/dashboard'); // o la ruta que quieras
        }

        $this->addError('email', 'Credenciales incorrectas');
    }

    
    public function render()
    {
        return view('livewire.login-form');
    }
}
