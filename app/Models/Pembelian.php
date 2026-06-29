<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pembelian extends Model
{
    protected $table = 'pembelians';

    protected $fillable = [
        'no_po',
        'supplier_id',
        'tanggal',
        'total_harga',
        'status',   // pending, diterima, dibatalkan
        'catatan',
    ];

    protected $casts = [
        'tanggal'     => 'date',
        'total_harga' => 'decimal:2',
    ];

    /** Relasi ke tabel suppliers. */
    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }

    /** Relasi ke detail item pembelian. */
    public function details(): HasMany
    {
        return $this->hasMany(DetailPembelian::class, 'pembelian_id');
    }
}