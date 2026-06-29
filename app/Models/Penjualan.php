<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penjualan extends Model
{
    protected $table = 'penjualans';

    protected $fillable = [
        'no_invoice',
        'pelanggan_id',
        'user_id',
        'tanggal',
        'total',
        'metode_pembayaran',  // tunai, transfer, QRIS, cicilan
        'status',             // selesai, proses, batal
        'catatan',
    ];

    protected $casts = [
        'tanggal' => 'datetime',
        'total'   => 'decimal:2',
    ];

    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function details(): HasMany
    {
        return $this->hasMany(DetailPenjualan::class, 'penjualan_id');
    }
}