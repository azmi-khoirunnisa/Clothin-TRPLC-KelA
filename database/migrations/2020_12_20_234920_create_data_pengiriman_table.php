<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPengirimanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pengiriman', function (Blueprint $table) {
          $table->bigIncrements('id_data_pengiriman');
          $table->string('no_resi',20);
          $table->unsignedBigInteger('id_data_transaksi');
          $table->foreign('id_data_transaksi')->references('id_data_transaksi')->on('data_transaksi')->onDelete('cascade');
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
        Schema::dropIfExists('data_pengiriman');
    }
}
