<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CierreVenta extends Model
{
    use HasFactory;
    protected $fillable = [
        'fecha',
        'hora',
        'observaciones',
        'efectivo',
        'gastos',
        'id_sucursal'
    ];
    
    public function sucursal()
    {
        return $this->belongsTo('App\Models\Sucursal');
    }
   
}
