<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;
    protected $fillable = [
        'observacion',
        'hora_entrada',
        'hora_salida',

    ];
    
    public function control_asistencias()
    {
        return $this->hasMany('App\Models\ControlAsistencia');
    }
}
