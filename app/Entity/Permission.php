<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';
    protected $primaryKey = 'id';
    protected $fillable = ['name','slug','descripcion','model'];
    //
}
