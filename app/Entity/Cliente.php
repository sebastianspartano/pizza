<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'Clientes';
    protected $primaryKey = 'id';
    protected $fillable = ["nit","persona_id"];

    //
}
