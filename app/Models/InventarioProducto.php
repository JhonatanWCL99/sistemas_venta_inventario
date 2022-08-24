<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventarioProducto extends Model
{
    use HasFactory;

    public function inventario()
    {
        return $this->belongsTo('App\Models\Inventario');
    }
    public function productos()
    {
        return $this->hasMany('App\Models\Producto');
    }
}
