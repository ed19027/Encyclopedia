<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    public function family() 
    {       
        return $this->belongsTo('App\Family', 'family_id');     
    }
    public function subfamily() 
    {       
        return $this->belongsTo('App\Subamily', 'subfamily_id');     
    }
    public function genus() 
    {       
        return $this->belongsTo('App\Genus', 'genus_id');     
    }
    public function lsg() 
    {       
        return $this->belongsTo('App\LSG', 'lsg_id');     
    }
    public function watchLaters()
    {
        return $this->hasMany('App\WatchLater');
    }
}
