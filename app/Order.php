<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function clasz() 
    {       
        return $this->belongsTo('App\Clasz', 'class_id');     
    }
    public function families()
    {
        return $this->hasMany('App\Family');
    }
}
