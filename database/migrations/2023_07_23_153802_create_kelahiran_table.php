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
        Schema::create('kelahiran', function (Blueprint $table) {
            $table->id();
            //data bayi
            $table->string('nik_bayi')->default('')->nullable();
            $table->string('nama_bayi');
            $table->string('warganegara_bayi');
            $table->string('kecamatan')->default('')->nullable();
            $table->string('kelurahan')->default('')->nullable();
            $table->string('jns_kelamin')->default('')->nullable();
            $table->string('tmpt_dilahirkan')->default('')->nullable();
            $table->string('tmpt_kelahiran')->default('')->nullable();
            $table->string('tgl_lahir')->default('')->nullable();
            $table->string('jam')->default('')->nullable();
            $table->string('anak_ke')->default('')->nullable();
            $table->string('jns_kelahiran')->default('')->nullable();
            $table->string('penolong_lahir')->default('')->nullable();
            $table->string('brt_bayi')->default('')->nullable();
            $table->string('pjg_bayi')->default('')->nullable();

            //data ayah
            $table->string('nik_ayah')->default('')->nullable();
            $table->string('nama_ayah')->default('')->nullable();
            $table->string('tmpt_lahir_ayah')->default('')->nullable();
            $table->string('tgl_lahir_ayah')->default('')->nullable();
            $table->string('no_kk_ayah')->default('')->nullable();
            $table->string('warganegara_ayah')->default('')->nullable();

            //data ibu
            $table->string('nik_ibu')->default('')->nullable();
            $table->string('nama_ibu')->default('')->nullable();
            $table->string('tmpt_lahir_ibu')->default('')->nullable();
            $table->string('tgl_lahir_ibu')->default('')->nullable();
            $table->string('no_kk_ibu')->default('')->nullable();
            $table->string('warganegara_ibu')->default('')->nullable();

            //data saksi
            $table->string('nik_s1')->default('')->nullable();
            $table->string('nama_s1')->default('')->nullable();
            $table->string('no_kk_s1')->default('')->nullable();
            $table->string('warganegara_s1')->default('')->nullable();

            $table->string('nik_s2')->default('')->nullable();
            $table->string('nama_s2')->default('')->nullable();
            $table->string('no_kk_s2')->default('')->nullable();
            $table->string('warganegara_s2')->default('')->nullable();

             //data pelapor
             $table->string('nik_pelapor')->default('')->nullable();
             $table->string('nama_pelapor')->default('')->nullable();
             $table->string('email_pelapor')->default('')->nullable();
             $table->string('no_hp_pelapor')->default('')->nullable();
             $table->string('no_kk_pelapor')->default('')->nullable();
             $table->string('warganegara_pelapor')->default('')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelahiran');
    }
};
