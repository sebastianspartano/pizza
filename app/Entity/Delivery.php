<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $table = 'deliverys';
    protected $primaryKey = 'id';
    protected $fillable = ["fecha_entrega","longitud","latitud","calificacion","estado","orden_id","cliente_id","user_id"];
    //
}
