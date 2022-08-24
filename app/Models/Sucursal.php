<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'ubicacion',
        
    ];
    public function cierre_ventas()
    {
        return $this->hasMany('App\Models\CierreVenta');
    }
    public function sucursal_productos()
    {
        return $this->hasMany('App\Models\SucursalProducto');
    }
}
