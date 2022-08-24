<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SucursalProducto extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_producto',
        'id_sucursal',
        
    ];

    public function producto()
    {
        return $this->belongsTo('App\Models\Producto');
    }

    public function sucursal_producto()
    {
        return $this->belongsTo('App\Models\Sucursal');
    }
    
}
