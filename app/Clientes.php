<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'clientes';

    protected $fillable=['nombre','tipo_documento','num_documento','direccion','telefono','email'];

}
