<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailPembelian extends Model
{
    protected $table = 'detail_pembelians';

    protected $fillable = [
        'pembelian_id',
        'handphone_id',
        'qty',
        'harga_satuan',
        'subtotal',
    ];

    protected $casts = [
        'qty'          => 'integer',
        'harga_satuan' => 'decimal:2',
        'subtotal'     => 'decimal:2',
    ];

    public function pembelian(): BelongsTo
    {
        return $this->belongsTo(Pembelian::class, 'pembelian_id');
    }

    public function handphone(): BelongsTo
    {
        return $this->belongsTo(Handphone::class, 'handphone_id');
    }
}