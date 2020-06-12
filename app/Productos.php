<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Productos extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'producto', 'cantidad', 'precio_compra', 'precio_venta', 'categorias_id',
    ];
}
