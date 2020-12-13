<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\toko;
use App\User;

class produk extends Model
{
  protected $fillable = [
      'nama_produk','harga_produk','bahan','image','toko_id','user_id'
  ];

  public function toko()
  {
    return $this->belongsTo('App\toko');
  }
  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
