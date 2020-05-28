<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    protected $table = 'compras';
        
        protected $fillable = [
        'idproveedor',
        'idproducto',
        'num_compra',
        'cantidad',
        'precio',
        'total',
        ];

}
