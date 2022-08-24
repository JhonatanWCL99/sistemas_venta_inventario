<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoricoVenta extends Model
{
    use HasFactory;
    protected $fillable = [
        'cantidad',
        'fecha',
        'id_usuario',
        'id_producto'
    ];
    public function productos()
    {
        return $this->hasMany('App\Models\Producto');
    }
    public function usuarios()
    {
        return $this->hasMany('App\Models\User');
    }
}
