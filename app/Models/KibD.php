<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KibD extends Model
{
    use HasFactory;

    protected $table = 'kib_d';

    protected $fillable = [
        'nama_barang',
        'kode_barang',
        'nomor_register',
        'konstruksi',
        'panjang',
        'lebar',
        'luas',
        'lokasi',
        'tanggal_dokumen',
        'nomor_dokumen',
        'status_tanah',
        'nomor_kode_tanah',
        'asal_usul',
        'kondisi',
        'keterangan',
    ];

    // Untuk tipe data yang memerlukan casting
    protected $casts = [
        'panjang' => 'decimal:2',
        'lebar' => 'decimal:2',
        'luas' => 'decimal:2',
        'tanggal_dokumen' => 'date',
    ];
}
