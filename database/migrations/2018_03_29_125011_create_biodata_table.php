<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiodataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_ktp', 20);
            $table->string('nama_lengkap', 50);
            $table->string('tempat_lahir', 30);
            $table->date('tanggal_lahir');
            $table->enum('kewarganegaraan',['WNI','WNA']);
            $table->string('agama', 20);
            $table->string('nama_ayah' , 50);
            $table->string('nama_ibu', 50);
            $table->string('nama_pasangan', 50)->nullable();
            $table->unsignedInteger('jumlah_anak')->nullable()->default(0);
            $table->text('alamat');
            $table->string('nama_dagangan', 100);
            $table->string('jenis_dagangan', 100);
            $table->string('pendapatan', 50);
            $table->string('foto', 150)->nullable();
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
        Schema::dropIfExists('biodata');
    }
}
