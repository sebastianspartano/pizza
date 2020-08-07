<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $table = 'ingredientes';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','precio','imagen'];
    //
}
