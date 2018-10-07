<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';

    public function alsintan_pinjam()
    {
    	return $this->belongsTo('App\AlsintanPinjam');
    }

    public function poktan()
    {
    	return $this->belongsTo('App\Poktan');
    }

    public function alsintan_pinjman()
    {
    	return $this->belongsTo('App\AlsintanPinjam');
    }
}
