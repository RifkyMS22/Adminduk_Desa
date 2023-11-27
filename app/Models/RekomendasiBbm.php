<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekomendasiBbm extends Model
{
    use HasFactory;
    protected $table = 'rekomendasibbm';

    protected $fillable = [
        'nama',
        'nik',
        'no_kk',
        'jenis_kelamin',
        'tmpt_lahir',
        'tgl_lahir',
        'pekerjaan',
        'alamat',
        'alamat_usaha',
        'jns_usaha',
        'jns_bbm',
        'no_surat',
        'masa_berlaku',
    ];
}
