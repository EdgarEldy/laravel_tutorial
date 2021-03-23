<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //Add belongsToMany relationship to Role Model
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
