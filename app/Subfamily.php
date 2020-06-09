<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subfamily extends Model
{
    public function families() 
    {       
        return $this->hasMany('App\Order');     
    }
    public function genus()
    {
        return $this->belongsTo('App\Genus');
    }
    public function species()
    {
        return $this->belongsTo('App\Species');
    }
}
