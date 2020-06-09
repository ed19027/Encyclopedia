<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    public function orders() 
    {       
        return $this->hasMany('App\Order');     
    }
    public function subfamily()
    {
        return $this->belongsTo('App\Subfamily');
    }
}
