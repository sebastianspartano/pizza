<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class ProductoIngrediente extends Model
{
    protected $table = 'productos_ingredientes';
    protected $primaryKey = 'id';
    protected $fillable = ['producto_id','ingrediente_id'];
    //
}
