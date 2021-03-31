<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public $timestamps = false;

    //Add belongsToMany relationship to Role Model
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
