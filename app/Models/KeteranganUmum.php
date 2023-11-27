<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeteranganUmum extends Model
{
    use HasFactory;
    protected $table = 'ket_umum';

    protected $fillable = [
        'nik',
        'no_kk',
        'nama',
        'jenis_kelamin',
        'tmpt_lahir',
        'tgl_lahir',
        'warganegara',
        'agama',
        'pekerjaan',
        'alamat',
        'no_surat',
        'berlaku',
        'keperluan',
        'ket_lain',
    ];

    public $timestamps = false;
}
