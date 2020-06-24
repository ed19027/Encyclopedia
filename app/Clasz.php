<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clasz extends Model
{
    protected $table = 'clases';
    
    public function subdivision() 
    {       
        return $this->belongsTo('App\Subdivision', 'subdivision_id');     
    }
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
