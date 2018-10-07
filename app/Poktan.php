<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poktan extends Model
{
	protected $table = 'Poktan';

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function usulan()
    {
    	return $this->hasMany('App\Usulan');
    }

    public function kecamatan()
    {
    	return $this->belongsTo('App\Kecamatan');
    }

    public function desa()
    {
    	return $this->belongsTo('App\Desa');
    }
}
