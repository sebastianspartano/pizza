<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles';
    protected $primaryKey ='id';
    protected $fillable = ['name','slug','description','level'];
    
    //
}
