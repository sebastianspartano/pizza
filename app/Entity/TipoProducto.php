<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    protected $table = 'tipos_productos';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','estado'];
    //
}
