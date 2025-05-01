<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KibRekapitulasi extends Model
{
    use HasFactory;

    protected $table = 'kib_rekapitulasi';

    protected $fillable = [
        'jenis_barang',
        'tanggal_surat_pesanan',
        'nomor_surat_pesanan',
        'tanggal_dpa_spm',
        'nomor_dpa_spm',
        'jumlah_barang',
        'harga_satuan',
        'jumlah_harga',
        'dipergunakan_untuk',
        'keterangan',
    ];

    // Untuk tipe data yang memerlukan casting
    protected $casts = [
        'harga_satuan' => 'decimal:2',
        'jumlah_harga' => 'decimal:2',
    ];
}
