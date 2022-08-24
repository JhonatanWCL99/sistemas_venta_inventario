<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlAsistencia extends Model
{

    use HasFactory;
    protected $fillable = [
        'hora_llegada',
        'id_asistencia',
        'id_usuario',
    ];
    public function asistencia()
    {
        return $this->belongsTo('App\Models\Asistencia');
    }
}
