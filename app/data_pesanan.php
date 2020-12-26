<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\toko;
use App\data_transaksi;
use App\review;

class data_pesanan extends Model
{
    protected $table = 'data_pesanan';

    protected $primaryKey = 'id_data_pesanan';

    protected $fillable = [
      'jenis_kain', 'model_desain', 'lingkar_badan', 'lingkar_pinggul', 'panjang_badan', 'lebar_leher', 'alamat_pengiriman', 'toko_id','id_user',
    ];

    public function user()
    {
      return $this->belongsTo('App\User');
    }
    public function toko()
    {
      return $this->belongsTo('App\toko');
    }
    public function transaksi()
    {
      return $this->hasMany('App\data_transaksi');
    }
    public function review()
    {
      return $this->hasMany('App\review');
    }
}
