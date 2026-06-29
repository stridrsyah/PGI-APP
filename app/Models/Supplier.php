<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    protected $table = 'suppliers';

    protected $fillable = [
        'nama',
        'kategori',
        'kontak',
        'email',
        'alamat',
        'is_aktif',
    ];

    protected $casts = [
        'is_aktif' => 'boolean',
    ];

    /** Relasi ke tabel pembelians. */
    public function pembelians(): HasMany
    {
        return $this->hasMany(Pembelian::class, 'supplier_id');
    }
}