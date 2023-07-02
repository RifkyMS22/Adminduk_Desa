<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPendudukTable extends Migration
{
    public function up()
    {
        Schema::create('data_penduduk', function (Blueprint $table) {
            $table->string('nik')->primary();
            $table->string('no_kk');
            $table->string('nama');
            $table->string('alamat');
            $table->string('rt')->default('')->nullable();
            $table->string('rw')->default('')->nullable();
            $table->string('tmpt_lahir')->default('')->nullable();
            $table->string('tgl_lahir')->default('')->nullable();
            $table->string('jns_kelamin')->default('')->nullable();
            $table->string('stts_kawin')->default('')->nullable();
            $table->string('pendidikan')->default('')->nullable();
            $table->string('stts_hub_keluarga')->default('')->nullable();
            $table->string('pekerjaan')->default('')->nullable();
            $table->string('agama')->default('')->nullable();
            $table->string('no_akta_lahir')->default('')->nullable();
            $table->string('no_akta_nikah')->default('')->nullable();
            $table->string('tgl_nikah')->default('')->nullable();
            $table->string('no_akta_cerai')->default('')->nullable();
            $table->string('tgl_cerai')->default('')->nullable();
            $table->string('nik_ayah')->default('')->nullable();
            $table->string('nama_ayah')->default('')->nullable();
            $table->string('nik_ibu')->default('')->nullable();
            $table->string('nama_ibu')->default('')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_penduduk');
    }
}
