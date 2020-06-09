<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clasz extends Model
{
    public function subdivisions() 
    {       
        return $this->hasMany('App\Subdivision');     
    }
    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
