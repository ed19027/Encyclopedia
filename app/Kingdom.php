<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kingdom extends Model
{
    public function divisions()
    {
        return $this->hasMany('App\Division');
    }
}
