<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pindah extends Model
{
    use HasFactory;
    protected $table = 'pindah';

    protected $fillable = [
        'nik',
        'nama',
        'email',
        'no_hp',
        'no_kk',
        'almt_asal',
        'rt',
        'rw',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'desa',
        'kd_pos',
        'kls_pindah',
        'almt_pindah',
        'rt_pindah',
        'rw_pindah',
        'provinsi_pindah',
        'kota_pindah',
        'kd_pos_pindah',
        'alasan_pindah',
        'jns_kepindahan',
        'aggt_tdk_pindah',
        'aggt_pindah',
        'df_aggt_pindah',
    ];
    public function getKlsPindahAttribute($value)
    {
        return json_decode($value, true);
    }
}
