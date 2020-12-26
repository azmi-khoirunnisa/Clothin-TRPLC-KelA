<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\data_transaksi;

class data_pegiriman extends Model
{
    protected $table = 'data_pengiriman';

    protected $primaryKey = 'id_data_pengiriman';

    protected $fillable =
    [
      'no_resi','id_data_transaksi'
    ];

    public function transaksi()
    {
      return $this->belongsTo('App\data_transaksi');
    }
}
