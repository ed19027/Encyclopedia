<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    public function kingdom() 
    {       
        return $this->belongsTo('App\Kingdom', 'kingdom_id');     
    }
    public function subdivision()
    {
        return $this->hasMany('App\Subivision');
    }
}
