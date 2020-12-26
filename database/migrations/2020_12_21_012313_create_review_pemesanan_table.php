<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewPemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_pemesanan', function (Blueprint $table) {
            $table->bigIncrements('id_review_pemesanan');
            $table->string('review_pemesanan');
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
        Schema::dropIfExists('review_pemesanan');
    }
}
