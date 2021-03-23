<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    //Add belongsToMany users relationship
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    //Add belongsToMany Permission Model
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
