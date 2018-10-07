<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlsintanPinjam extends Model
{
    protected $table = 'alsintan_pinjam';

    protected $fillable = ['nama, merk', 'jumlah'];

    public function peminjaman()
    {
    	return $this->hasMany('App\Peminjaman');
    }
}
