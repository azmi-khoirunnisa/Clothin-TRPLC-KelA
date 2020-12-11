<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class toko extends Model
{
  protected $fillable = [
      'nama_toko','deskripsi_toko', 'user_id',
  ];

}
