<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DashboardBerita extends Model
{
    use HasFactory;

    protected $table = 'berita'; // Sesuaikan dengan nama tabel Anda jika tidak sesuai dengan konvensi Laravel.

    protected $fillable = [
        'judul',
        'isi',
        'gambar', // Sesuaikan dengan atribut gambar yang sesuai dengan struktur tabel Anda.
        // Tambahkan atribut lainnya sesuai kebutuhan.
    ];

    // Jika Anda memiliki kolom 'created_at' dan 'updated_at', tambahkan properti berikut:
    // public $timestamps = true;

    // Jika Anda memiliki atribut tanggal yang ingin di-cast ke Carbon, tambahkan properti berikut:
    // protected $dates = ['tanggal_atribut'];

    // Relasi atau metode tambahan dapat ditambahkan di sini.
}
