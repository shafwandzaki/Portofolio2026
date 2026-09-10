<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = ['posisi', 'mitra', 'periode', 'lokasi', 'deskripsi', 'type'];

    // Accessor: otomatis nentuin icon berdasarkan type
    public function getIconAttribute(): string
    {
        return match ($this->type) {
            'pengalamanterkait' => 'icon/pengalaman.png',
            'pengalamanlain'       => 'icon/freelance.png',
            'pengalamanorganisasi' => 'icon/organisasi.png',
            default      => 'icon/pengalaman.png',
        };
    }
}