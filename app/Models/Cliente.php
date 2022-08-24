<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellido',
        'sexo',
        'telefono'
    ];

    public function ventas()
    {
        return $this->hasMany('App\Models\Venta');
    }

}
