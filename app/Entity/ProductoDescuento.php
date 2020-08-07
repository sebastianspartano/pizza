<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class ProductoDescuento extends Model
{
    protected $table = 'productos_descuentos';
    protected $primaryKey = 'id';
    protected $fillable = ['fecha_ini','fecha_fin','porcentaje','estado','producto_id'];
    //
}
