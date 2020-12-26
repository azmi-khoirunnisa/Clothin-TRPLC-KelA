<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\data_pesanan;

class review extends Model
{
    protected $table = 'review_pemesanan';

    protected $primaryKey = 'id_review_pemesanan';

    protected $fillable = [
      'review_pemesanan', 'id_data_pesanan'
    ];

    public function review ()
    {
      return $this->belongsTo('App\data_pesanan');
    }
}
