<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_inventario',
    ];
    public function inventario_productos()
    {
        return $this->hasMany('App\Models\InventarioProducto');
    }
}
