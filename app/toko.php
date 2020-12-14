<?php

namespace App;
use App\User;
use App\produk;

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
  public function getNamaFieldAttribute($value)
  {
    $produk_id = substr($this->id, 0, 2);
    $produk = produk::find($produk_id);
    return $produk;
  }

}
