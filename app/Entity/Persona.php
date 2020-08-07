<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $Table = 'personas';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','apellido','ci','direccion','telefono'];
    //
}
