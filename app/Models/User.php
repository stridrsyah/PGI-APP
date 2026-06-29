<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'role',
        'email',
        'password',
        'is_aktif',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password'          => 'hashed',
            'is_aktif'          => 'boolean',
        ];
    }

    /** Cek apakah user adalah Owner */
    public function isOwner(): bool
    {
        return $this->role === 'owner';
    }

    /** Cek apakah user adalah Admin */
    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    public function pengeluarans()
    {
        return $this->hasMany(Pengeluaran::class, 'user_id');
    }

    public function penjualans()
    {
        return $this->hasMany(Penjualan::class, 'user_id');
    }
}