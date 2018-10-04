<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poktan extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
