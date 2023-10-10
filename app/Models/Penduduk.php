<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;
    protected $table = 'data_penduduk';
    protected $primaryKey = 'nik';

    protected $fillable = [
    'nik',
    'nama',
    'tmpt_tgl_lahir',
    'nama_ayah',
    'nama_ibu',
    'agama',
    'pekerjaan',
    'pendidikan',
    'jenis_kelamin',
    'status_perkawinan',
    'stts_hub_keluarga',
    'kewarganegaraan',

    ];

    public $timestamps = false;
}
