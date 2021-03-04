<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFavorite\Traits\Favoriteable;

class Species extends Model
{
    use Favoriteable;
    protected $fillable = ['name_latin', 'name_latvian', 'description', 'biology', 'size', 'weight', 'reproduction', 'prevalence', 'family_id', 'lsg_id'];
    public $timestamps = false;
    
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
    public static function scopeSearch($query, $searchTerm)
    {
        return $query->where('name_latvian', 'LIKE', '%'.$searchTerm.'%');
    }
}
