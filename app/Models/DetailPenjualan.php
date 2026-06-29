<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailPenjualan extends Model
{
    protected $table = 'detail_penjualans';

    protected $fillable = [
        'penjualan_id',
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

    public function penjualan(): BelongsTo
    {
        return $this->belongsTo(Penjualan::class, 'penjualan_id');
    }

    public function handphone(): BelongsTo
    {
        return $this->belongsTo(Handphone::class, 'handphone_id');
    }
}