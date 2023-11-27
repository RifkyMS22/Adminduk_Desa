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
        Schema::create('ket_umum', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik');
            $table->string('no_kk');
            $table->string('jenis_kelamin');
            $table->string('tmpt_lahir');
            $table->string('tgl_lahir');
            $table->string('warganegara');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('no_surat');
            $table->string('berlaku');
            $table->string('ket_lain');
            $table->string('keperluan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ket_umum');
    }
};
