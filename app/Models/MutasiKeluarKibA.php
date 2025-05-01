<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MutasiKeluarKibA extends Model
{
    use HasFactory;

    protected $table = 'mutasi_keluar_kib_a';

    protected $fillable = [
        'jenis_barang',
        'nama_barang',
        'merk_type',
        'no_sertifikat',
        'asal_perolehan',
        'bahan',
        'tahun_beli',
        'ukuran_konstruksi',
        'satuan',
        'kondisi',
        'jumlah_barang_awal',
        'harga_awal',
        'mutasi_berkurang_jumlah',
        'mutasi_berkurang_harga',
        'mutasi_bertambah_jumlah',
        'mutasi_bertambah_harga',
        'jumlah_barang_akhir',
        'harga_akhir',
        'keterangan',
    ];

    // Untuk tipe data yang memerlukan casting
    protected $casts = [
        'harga_awal' => 'decimal:2',
        'mutasi_berkurang_harga' => 'decimal:2',
        'mutasi_bertambah_harga' => 'decimal:2',
        'harga_akhir' => 'decimal:2',
    ];
}
