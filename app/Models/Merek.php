<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Merek extends Model
{
    protected $table = 'mereks';

    protected $fillable = [
        'nama',
        'kategori',
        'deskripsi',
        'logo',
        'is_aktif',
    ];

    protected $casts = [
        'is_aktif' => 'boolean',
    ];

    /**
     * Relasi: satu merek memiliki banyak handphone.
     */
    public function handphones(): HasMany
    {
        return $this->hasMany(Handphone::class, 'merek_id');
    }
}