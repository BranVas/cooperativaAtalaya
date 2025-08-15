<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $fillable =[
        'cargo',
        'estado_activo'
    ];

    public function user_()
{
    return $this->hasMany(User::class,'tipo_usuario_id');
}

}
