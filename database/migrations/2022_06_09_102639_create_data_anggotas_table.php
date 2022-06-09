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
        Schema::create('data_anggotas', function (Blueprint $table) {
            $table->id();
            $table->string('id_anggota', 50);
            $table->string('nama_anggota', 100);
            $table->string('status_di_jogja', 15);
            $table->string('alamat_tinggal', 100);
            $table->string('alamat_domisili', 100);
            $table->string('email', 30);
            $table->string('nomor_telepon', 15);
            $table->string('motto', 100);
            $table->string('foto_anggota', 100);
            $table->string('status_aktif', 11);
            $table->string('id_jabatan', 1);
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
        Schema::dropIfExists('data_anggotas');
    }
};
