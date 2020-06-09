<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function clases() 
    {       
        return $this->hasMany('App\Clasz');     
    }
    public function family()
    {
        return $this->belongsTo('App\Family');
    }
}
