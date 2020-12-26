<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_transaksi', function (Blueprint $table) {
            $table->bigIncrements('id_data_transaksi');
            $table->string('harga_pesanan',15);
            $table->string('no_rek',15);
            $table->unsignedBigInteger('id_data_pesanan');
            $table->foreign('id_data_pesanan')->references('id_data_pesanan')->on('data_pesanan')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_transaksi');
    }
}
