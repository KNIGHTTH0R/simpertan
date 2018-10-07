<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usulan extends Model
{
    protected $table = 'usulan';

    protected $fillable = ['poktan_id', 'alsintan_usulan_id', 'jumlah', 'catatan', 'is_approved'];

    public function poktan()
    {
    	return $this->belongsTo('App\Poktan');
    }

    public function alsintan_usulan()
    {
    	return $this->belongsTo('App\AlsintanUsulan');
    }
}
