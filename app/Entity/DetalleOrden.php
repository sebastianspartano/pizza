<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class DetalleOrden extends Model
{
    protected $table = 'detalles_ordenes';
    protected $primaryKey ='id';
    protected $fillable = ['precio','descuento','preciodescuento','producto_id','orden_id'];
    //
}
