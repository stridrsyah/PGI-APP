<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    protected $table = 'bookings';

    protected $fillable = [
        'pelanggan_id',
        'model_perangkat',
        'tipe_layanan',
        'jadwal',
        'keluhan',
        'status',  // menunggu, dikonfirmasi, selesai, dibatalkan
        'catatan',
    ];

    protected $casts = [
        'jadwal' => 'datetime',
    ];

    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id');
    }
}