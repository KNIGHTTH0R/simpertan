<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlsintanUsulan extends Model
{
    //
    protected $table = 'alsintan_usulan';

    protected $fillable = ['nama, merk', 'jumlah'];

    public function usulan()
    {
    	return $this->hasMany('App\usulan');
    }
}
