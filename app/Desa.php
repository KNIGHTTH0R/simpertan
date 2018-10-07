<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
	protected $table = 'desa';

    public function kecamatan()
    {
    	return $this->belongsTo('App\Kecamatan');
    }

    public function poktan()
    {
    	return $this->hasMany('App\Poktan');
    }
}
