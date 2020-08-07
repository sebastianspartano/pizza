<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $table = 'ordenes';
    protected $primaryKey = 'id';
    protected $fillable = ['nro_factura','total','tipo','estado','fecha','cliente_id','user_id'];
    //
}
