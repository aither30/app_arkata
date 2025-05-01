<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mutasi_keluar_kib_a', function (Blueprint $table) {
            $table->id();

            $table->string('jenis_barang')->default('Tanah');

            // Spesifikasi
            $table->string('nama_barang')->nullable();
            $table->string('merk_type')->nullable();
            $table->string('no_sertifikat')->nullable();

            // Asal perolehan
            $table->string('asal_perolehan')->nullable();
            $table->string('bahan')->nullable();

            $table->year('tahun_beli')->nullable();
            $table->string('ukuran_konstruksi')->nullable();
            $table->string('satuan')->nullable();
            $table->string('kondisi')->nullable(); // B, RR, RB

            // Jumlah Awal
            $table->integer('jumlah_barang_awal')->nullable();
            $table->decimal('harga_awal', 20, 2)->nullable();

            // Mutasi: berkurang
            $table->integer('mutasi_berkurang_jumlah')->nullable();
            $table->decimal('mutasi_berkurang_harga', 20, 2)->nullable();

            // Mutasi: bertambah
            $table->integer('mutasi_bertambah_jumlah')->nullable();
            $table->decimal('mutasi_bertambah_harga', 20, 2)->nullable();

            // Jumlah akhir
            $table->integer('jumlah_barang_akhir')->nullable();
            $table->decimal('harga_akhir', 20, 2)->nullable();

            // Keterangan
            $table->text('keterangan')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mutasi_kib_a');
    }
};
