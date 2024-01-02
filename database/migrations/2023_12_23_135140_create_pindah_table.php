<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pindah', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nama');
            $table->string('email');
            $table->string('no_hp');
            $table->string('no_kk');
            $table->string('almt_asal');
            $table->string('rt');
            $table->string('rw');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('kd_pos');
            $table->string('kls_pindah');
            $table->string('almt_pindah');
            $table->string('rt_pindah');
            $table->string('rw_pindah');
            $table->string('provinsi_pindah');
            $table->string('kota_pindah');
            $table->string('kd_pos_pindah');
            $table->string('alasan_pindah');
            $table->string('jns_kepindahan');
            $table->string('aggt_tdk_pindah');
            $table->string('aggt_pindah');
            $table->string('df_aggt_pindah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pindah');
    }
};
