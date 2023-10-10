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
        Schema::create('ket_usaha', function (Blueprint $table) {
            
            $table->string('nik')->primary();
            $table->string('no_kk');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('binti');
            $table->string('tmpt_tgl_lahir');
            $table->string('agama');
            $table->string('warganegara');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('no_surat');
            $table->string('keperluan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ket_usaha');
    }
};
