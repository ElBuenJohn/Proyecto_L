<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCompras extends Model
{
    protected $table = 'detalle_compras';
    protected $fillable = [
        'idcompra', 
        'idproducto',
        'cantidad',
        'precio'
    ];
}
