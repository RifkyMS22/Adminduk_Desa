<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'nik',
        'email',
        'password',
        'role', // Tambahkan kolom 'role' di sini
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function hasRole($role)
    {
        return $this->role === $role;
    }
    public function isAdmin()
    {
        // Assuming you have an 'role' column in your users table
        return $this->role === 'admin';
    }
    public function isUser()
    {
        // Assuming you have an 'role' column in your users table
        return $this->role === 'user';
    }
    
    public function pengajuan()
{
    return $this->hasMany(Pengajuan::class, 'user_id');
}
    
    
}
