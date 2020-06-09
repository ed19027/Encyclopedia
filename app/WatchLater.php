<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WatchLater extends Model
{
    public function species() 
    {       
        return $this->hasMany('App\Species');     
    }
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
