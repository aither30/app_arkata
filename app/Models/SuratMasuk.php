<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;

    protected $table = 'surat_masuk';

    protected $fillable = [
        'tanggal_terima',
        'pengirim',
        'nomor_surat',
        'hal_isi_surat',
        'lampiran',
        'diteruskan_kepada',
        'keterangan',
    ];

    protected $casts = [
        'tanggal_terima' => 'date',
    ];
}
