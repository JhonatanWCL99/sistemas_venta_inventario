<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivos extends Model
{
    use HasFactory;
    protected $fillable = [
        'ruta_imagen',
    ];

    public function productos()
    {
        return $this->hasMany('App\Models\Producto');
    }

}
