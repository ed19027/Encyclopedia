<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subdivision extends Model
{
    public function division() 
    {       
        return $this->belongsTo('App\Division', 'division_id');     
    }
    public function clases()
    {
        return $this->hasMany('App\Clasz');
    }
}
