<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\data_pesanan;
use App\data_pegiriman;

class data_transaksi extends Model
{
    protected $table = 'data_transaksi';

    protected $primaryKey = 'id_data_transaksi';

    protected $fillable = [
      'harga_pesanan','no_rek','id_data_pesanan','id_user'
    ];

    public function user()
    {
      return $this->belongsTo('App\User');
    }
    public function data_pesanan()
    {
      return $this->belongsTo('App\data_pesanan');
    }
    public function pengiriman()
    {
      return $this->hasMany('App\data_pegiriman');
    }
}
