<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pengaduan extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'pengaduan', 'gambar', 'id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
