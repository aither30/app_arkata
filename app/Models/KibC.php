<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KibC extends Model
{
    use HasFactory;

    protected $table = 'kib_c';

    protected $fillable = [
        'nama_barang',
        'kode_barang',
        'nomor_register',
        'kondisi_bangunan',
        'bertingkat',
        'beton',
        'luas_lantai',
        'lokasi',
        'tanggal_dokumen_gedung',
        'nomor_dokumen_gedung',
        'luas',
        'status_tanah',
        'harga',
        'nomor_kode_tanah',
        'asal',
        'keterangan',
    ];

    // Jika ingin menggunakan tipe data tertentu untuk field tertentu
    protected $casts = [
        'luas_lantai' => 'decimal:2',
        'luas' => 'decimal:2',
        'harga' => 'decimal:2',
        'tanggal_dokumen_gedung' => 'date',
    ];
}
