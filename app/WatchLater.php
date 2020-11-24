<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WatchLater extends Model
{
    protected $table = 'watch_later';
    
    public function species() 
    {       
        return $this->hasMany('App\Species');     
    }
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
