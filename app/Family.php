<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{   
    public function order() 
    {       
        return $this->belongsTo('App\Order', 'order_id');     
    }
    public function subfamilies()
    {
        return $this->hasMany('App\Subfamily');
    }
    public function genuses()
    {
        return $this->hasMany('App\Genus');
    }
}
