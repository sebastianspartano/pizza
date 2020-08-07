<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class PermissionUser extends Model
{
    protected $Table = 'permission_user';
    protected $primaryKey = 'id';
    protected $fillable = ['permission_id','user_id'];
}
