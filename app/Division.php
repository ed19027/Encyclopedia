<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    public function kingdoms() 
    {       
        return $this->hasMany('App\Kingdom');     
    }
    public function subdivision()
    {
        return $this->belongsTo('App\Subivision');
    }
}
