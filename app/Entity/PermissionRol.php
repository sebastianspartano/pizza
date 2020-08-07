<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class PermissionRol extends Model
{
    protected $Table = 'permission_role';
    protected $primaryKey = 'id';
    protected $fillable = ['permission_id','role_id'];
    //
}
