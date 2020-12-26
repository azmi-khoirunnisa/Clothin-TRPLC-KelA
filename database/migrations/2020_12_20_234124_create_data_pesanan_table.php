<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pesanan', function (Blueprint $table) {
          $table->bigIncrements('id_data_pesanan');
          $table->string('jenis_kain',15);
          $table->string('model_desain');
          $table->string('lingkar_badan',15);
          $table->string('lingkar_pinggul',15);
          $table->string('panjang_badan',15);
          $table->string('lebar_leher',15);
          $table->string('alamat_pengiriman',50);
          $table->Integer('id_user')->unsigned();
          $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
          $table->unsignedBigInteger('toko_id');
          $table->foreign('toko_id')->references('id')->on('tokos')->onDelete('cascade');
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
        Schema::dropIfExists('data_pesanan');
    }
}
