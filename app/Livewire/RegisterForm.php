<?php

namespace App\Livewire;

use App\Models\User;

use Livewire\Component;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterForm extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $tipo_usuario_id;
    public $dni;
    public $nombre;
    public $apellidos;

    public function render()
    {
        return view('livewire.register-form');
    }

     public function register()
    {
        $this->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'tipo_usuario_id' => 'required|exists:tipo_usuarios,id',
            'dni' => 'required|size:8',
            'nombre' => 'required|max:50|min:2',
            'apellidos' => 'required|max:50|min:2',
        ]);

        DB::transaction(function () {
            $usuario = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'tipo_usuario_id' => $this->tipo_usuario_id,
                'password' => Hash::make($this->password),
            ]);

            $usuario->trabajador_()->create([
                'dni' => $this->dni,
                'nombre' => $this->nombre,
                'apellidos' => $this->apellidos,
              //  'estado_activo' => true,
            ]);
        });

        session()->flash('success', 'Registro completado correctamente');
        return redirect()->route('login'); // o donde quieras redirigir
    }
}
