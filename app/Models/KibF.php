<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KibF extends Model
{
    use HasFactory;

    protected $table = 'kib_f';

    protected $fillable = [
        'nama_barang',
        'konstruksi_bertingkat',
        'konstruksi_beton',
        'luas',
        'lokasi',
        'tanggal_dokumen',
        'nomor_dokumen',
        'tanggal_mulai',
        'status_tanah',
        'nomor_kode_tanah',
        'asal_usul',
        'nilai_kontrak',
        'keterangan',
    ];

    // Untuk tipe data yang memerlukan casting
    protected $casts = [
        'nilai_kontrak' => 'decimal:2',
    ];
}
