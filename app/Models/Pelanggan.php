<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pelanggan extends Model
{
    protected $table = 'pelanggans';

    protected $fillable = [
        'nama',
        'kategori',   // regular, silver, gold
        'kontak',
        'email',
        'alamat',
        'poin',
    ];

    protected $casts = [
        'poin' => 'integer',
    ];

    /** Relasi ke tabel penjualans. */
    public function penjualans(): HasMany
    {
        return $this->hasMany(Penjualan::class, 'pelanggan_id');
    }

    /** Relasi ke tabel bookings. */
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class, 'pelanggan_id');
    }

    /** Relasi ke tabel servis. */
    public function servis(): HasMany
    {
        return $this->hasMany(Servis::class, 'pelanggan_id');
    }
}