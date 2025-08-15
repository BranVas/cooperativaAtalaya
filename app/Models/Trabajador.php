<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $fillable=[
        'dni',
        'nombre',
        'apellidos',
        'estado_activo',
        'user_id'
    ];

    public function user_()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
