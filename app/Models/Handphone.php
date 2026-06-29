<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Handphone extends Model
{
    protected $table = 'handphones';

    protected $fillable = [
        'merek_id',
        'nama',
        'sku',
        'imei',
        'kategori',   // flagship, mid-range, entry-level
        'stok',
        'harga_beli',
        'harga_jual',
        'deskripsi',
        'foto',
        'is_aktif',
    ];

    protected $casts = [
        'harga_beli' => 'decimal:2',
        'harga_jual' => 'decimal:2',
        'stok'       => 'integer',
        'is_aktif'   => 'boolean',
    ];

    /** Relasi ke tabel mereks. */
    public function merek(): BelongsTo
    {
        return $this->belongsTo(Merek::class, 'merek_id');
    }

    /** Relasi ke detail pembelian. */
    public function detailPembelians(): HasMany
    {
        return $this->hasMany(DetailPembelian::class, 'handphone_id');
    }

    /** Relasi ke detail penjualan. */
    public function detailPenjualans(): HasMany
    {
        return $this->hasMany(DetailPenjualan::class, 'handphone_id');
    }
}