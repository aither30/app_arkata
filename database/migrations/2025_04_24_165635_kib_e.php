<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kib_e', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_barang');
            $table->string('kode_barang');
            $table->string('nomor_register');
            $table->string('judul_pencipta');
            $table->text('spesifikasi');
            $table->string('asal_daerah');
            $table->string('pencipta');
            $table->string('bahan');
            $table->string('jenis');
            $table->string('ukuran');
            $table->integer('jumlah');
            $table->string('tahun_cetak_pembelian');
            $table->string('asal_usul');
            $table->decimal('harga', 15, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kib_e');
    }
};
