<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genus extends Model
{
    protected $table = 'genuses';
    
    public function family() 
    {       
        return $this->belongsTo('App\Family', 'family_id');     
    }
    public function subfamily() 
    {       
        return $this->belongsTo('App\Subamily', 'subfamily_id');     
    }
    public function species()
    {
        return $this->hasMany('App\Species');
    }
}
