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
            $table->string('nama');
            $table->string('tmpt_tgl_lahir');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('pendidikan');
            $table->string('jenis_kelamin');
            $table->string('status_perkawinan');
            $table->string('stts_hub_keluarga');
            $table->string('kewarganegaraan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_penduduk');
    }
}
