<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subfamily extends Model
{
    public function family() 
    {       
        return $this->belongsTo('App\Family', 'family_id');     
    }
    public function genus()
    {
        return $this->hasMany('App\Genus');
    }
    public function species()
    {
        return $this->hasMany('App\Species');
    }
}
