<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KibE extends Model
{
    use HasFactory;

    protected $table = 'kib_e';

    protected $fillable = [
        'nama_barang',
        'kode_barang',
        'nomor_register',
        'judul_pencipta',
        'spesifikasi',
        'asal_daerah',
        'pencipta',
        'bahan',
        'jenis',
        'ukuran',
        'jumlah',
        'tahun_cetak_pembelian',
        'asal_usul',
        'harga',
    ];

    // Untuk tipe data yang memerlukan casting
    protected $casts = [
        'harga' => 'decimal:2',
    ];
}
