<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    use HasFactory;
    protected $fillable = [
        'cantidad',
        'precio',
        'descuento',
        'id_producto',
        'id_venta'

    ];
    public function producto()
    {
        return $this->belongsTo('App\Models\Producto');
    }
    public function venta()
    {
        return $this->belongsTo('App\Models\Venta');
    }


}
