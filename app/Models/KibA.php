<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KibA extends Model
{
    use HasFactory;

    protected $table = 'kib_a';

    protected $fillable = [
        'nama_barang',
        'nomor_kode_barang',
        'nomor_register',
        'luas_tanah',
        'tahun_pengadaan',
        'letak',
        'hak',
        'tanggal_serifikat',
        'nomor_serifikat',
        'asal_usul',
        'harga',
        'keterangan',
    ];

    // Jika ingin menggunakan tipe data tertentu untuk field tertentu
    protected $casts = [
        'tanggal_serifikat' => 'date',
        'luas_tanah' => 'decimal:2',
        'harga' => 'decimal:2',
    ];
}
