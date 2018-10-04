<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    public function desa()
    {
    	return $this->hasMany('App\Desa');
    }
}
