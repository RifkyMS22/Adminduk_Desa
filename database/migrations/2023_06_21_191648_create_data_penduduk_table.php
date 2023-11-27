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
            $table->string('rt');
            $table->string('rw');
            $table->string('tmpt_lahir');
            $table->string('tgl_lahir');
            $table->string('jns_kelamin');
            $table->string('stts_kawin');
            $table->string('pendidikan');
            $table->string('stts_hub_keluarga');
            $table->string('pekerjaan');
            $table->string('agama');
            $table->string('no_akta_lahir');
            $table->string('no_akta_nikah');
            $table->string('tgl_nikah');
            $table->string('no_akta_cerai');
            $table->string('tgl_cerai');
            $table->string('nik_ayah');
            $table->string('nama_ayah')->nullable();
            $table->string('nik_ibu')->default('');
            $table->string('nama_ibu')->default('')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_penduduk');
    }
}
