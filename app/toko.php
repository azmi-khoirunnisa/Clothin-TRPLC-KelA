<?php

namespace App;
use App\User;
use App\produk;
use App\toko;
use App\data_pesanan;

use Illuminate\Database\Eloquent\Model;

class toko extends Model
{
  protected $fillable = [
      'nama_toko','deskripsi_toko', 'user_id'
  ];

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function produk()
  {
    return $this->hasMany('App\produk');
  }
  public function data_pesanan()
  {
    return $this->hasMany('App\data_pesanan');
  }


}
