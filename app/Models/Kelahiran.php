<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelahiran extends Model
{
    use HasFactory;
    protected $table = 'kelahiran';

    protected $fillable = [
    //data bayi
    'nik_bayi',
    'nama_bayi',
    'warganegara_bayi',
    'kecamatan',
    'kelurahan',
    'tmpt_dilahirkan',
    'tmpy_kelahiran',
    'tgl_lahir',
    'jam',
    'jns_kelamin',
    'anak_ke',
    'pnjng_lahir',
    'brt_bayi',
    'pjg_bayi',

    //data ayah
    'nik_ayah',
    'nama_ayah',
    'tmpt_lahir_ayah',
    'tgl_lahir_ayah',
    'no_kk_ayah',
    'warganegara_ayah',

    //data ibu
    'nik_ibu',
    'nama_ibu',
    'tmpt_lahir_ibu',
    'tgl_lahir_ibu',
    'no_kk_ibu',
    'warganegara_ibu',

    //data saksi
    'nik_s1',
    'nama_s1',
    'no_kk_s1',
    'warganegara_s1',
    'nik_s2',
    'nama_s2',
    'no_kk_s2',
    'warganegara_s2',
    ];
    
}
