<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{
    use \Illuminate\Auth\Authenticatable;
    
    public function posts() {
        return $this->hasMany('App\Post');
    }
}
