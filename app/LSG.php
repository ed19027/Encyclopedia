<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LSG extends Model
{
    protected $primaryKey = 'category';
    public $incrementing = false;
    protected $table = 'lsg';
    
    public function species()
    {
        return $this->hasMany('App\Species');
    }
}
