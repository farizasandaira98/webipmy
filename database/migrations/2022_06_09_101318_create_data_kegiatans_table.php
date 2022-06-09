<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kegiatans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kegiatan',50);
            $table->string('lokasi_kegiatan',100);
            $table->string('deskripsi');
            $table->string('id_foto_kegiatan', 1);
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
        Schema::dropIfExists('data_kegiatans');
    }
};
