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
        Schema::create('rekomendasibbm', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik');
            $table->string('no_kk');
            $table->string('jenis_kelamin');
            $table->string('tmpt_lahir');
            $table->string('tgl_lahir');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('alamat_usaha');
            $table->string('konsumen_pengguna');
            $table->string('jns_usaha');
            $table->string('no_surat');
            $table->string('jns_bbm');
            $table->string('masa_berlaku');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekomendasibbm');
    }
};
