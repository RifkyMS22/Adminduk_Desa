<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPenduduk extends Model
{
    use HasFactory;

    protected $table = 'data_penduduk';
    protected $primaryKey = 'nik';

    protected $fillable = [
        'nik',
        'no_kk',
        'nama',
        'alamat',
        'rt',
    ];
    
    public $timestamps = false;
}
