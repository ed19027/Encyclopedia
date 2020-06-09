<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    public function families() 
    {       
        return $this->hasMany('App\Family');     
    }
    public function subfamilies() 
    {       
        return $this->hasMany('App\Subamily');     
    }
    public function genuses() 
    {       
        return $this->hasMany('App\Genus');     
    }
    public function categories() 
    {       
        return $this->hasMany('App\LSG');     
    }
    public function watchLater()
    {
        return $this->belongsTo('App\WatchLater');
    }
}
