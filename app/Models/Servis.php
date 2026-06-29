<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Servis extends Model
{
    protected $table = 'servis';

    protected $fillable = [
        'no_servis',
        'pelanggan_id',
        'model_perangkat',
        'keluhan',
        'teknisi',
        'estimasi_biaya',
        'biaya_akhir',
        'status',   // antri, proses, selesai, diambil, batal
        'tanggal_masuk',
        'tanggal_selesai',
        'catatan',
    ];

    protected $casts = [
        'estimasi_biaya' => 'decimal:2',
        'biaya_akhir'    => 'decimal:2',
        'tanggal_masuk'  => 'date',
        'tanggal_selesai'=> 'date',
    ];

    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id');
    }
}