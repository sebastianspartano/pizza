<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','descripcion','foto','tipo_producto_id','precio'];
    //
}
