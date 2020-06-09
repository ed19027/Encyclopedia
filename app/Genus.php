<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genus extends Model
{
    public function families() 
    {       
        return $this->hasMany('App\Family');     
    }
    public function subfamilies() 
    {       
        return $this->hasMany('App\Subamily');     
    }
    public function species()
    {
        return $this->belongsTo('App\Species');
    }
}
