<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pengeluaran extends Model
{
    protected $table = 'pengeluarans';

    protected $fillable = [
        'user_id',
        'tanggal',
        'kategori',   // operasional, gaji, utilitas, dll.
        'deskripsi',
        'nominal',
        'status',     // lunas, pending
        'bukti',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'nominal' => 'decimal:2',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}