<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KibB extends Model
{
    use HasFactory;

    protected $table = 'kib_b';

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'nomor_register',
        'merk',
        'ukuran',
        'bahan',
        'tahun_pembelian',
        'pabrik',
        'rangka',
        'mesin',
        'polisi',
        'bpkb',
        'asal',
        'harga',
        'keterangan',
    ];

    // Jika ingin menggunakan tipe data tertentu untuk field tertentu
    protected $casts = [
        'ukuran' => 'decimal:2',
        'harga' => 'decimal:2',
        'tahun_pembelian' => 'integer',
    ];
}
