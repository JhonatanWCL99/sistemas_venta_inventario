<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $fillable = [
        'fecha',
        'total',
        'id_cliente',
        'id_usuario'
    ];
    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente');
    }
    public function detalle_ventas()
    {
        return $this->hasMany('App\Models\DetalleVenta');
    }
    
}
