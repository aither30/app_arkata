<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    use HasFactory;

    protected $table = 'surat_keluar';

    protected $fillable = [
        'tanggal',
        'nomor_surat',
        'index_surat',
        'dikirimkan_kepada',
        'isi_surat',
        'keterangan',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];
}
