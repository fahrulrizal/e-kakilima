<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesanTempatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesan_tempat', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('biodata_id');
            $table->string('nama_lengkap', 50);
            $table->integer('tempat_id');
            $table->string('harga', 50)->default(0);
            $table->string('jumlah')->default(0);
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
        Schema::dropIfExists('pesan_tempat');
    }
}
