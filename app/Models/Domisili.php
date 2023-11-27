<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domisili extends Model
{
    use HasFactory;
    protected $table = 'ket_domisili';
    // protected $primaryKey = 'nama';


    protected $fillable = [
        'nik',
        'no_kk',
        'nama',
        'jenis_kelamin',
        'binti',
        'tmpt_lahir',
        'tgl_lahir',
        'agama',
        'warganegara',
        'pekerjaan',
        'alamat',
        'no_surat',
        'keperluan',
        
    ];

    public $timestamps = false;
}
