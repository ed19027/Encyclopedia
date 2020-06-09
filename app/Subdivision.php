<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subdivision extends Model
{
    public function divisions() 
    {       
        return $this->hasMany('App\Division');     
    }
    public function clasz()
    {
        return $this->belongsTo('App\Class');
    }
}
