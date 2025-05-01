<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kib_rekapitulasi', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_barang');

            // Surat Pesanan
            $table->date('tanggal_surat_pesanan')->nullable();
            $table->string('nomor_surat_pesanan')->nullable();

            // DPA / SPM
            $table->date('tanggal_dpa_spm')->nullable();
            $table->string('nomor_dpa_spm')->nullable();

            // Jumlah
            $table->integer('jumlah_barang')->default(0);
            $table->decimal('harga_satuan', 15, 2)->default(0);
            $table->decimal('jumlah_harga', 20, 2)->default(0);

            $table->string('dipergunakan_untuk')->nullable();
            $table->text('keterangan')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kibRekapitulasi');
    }
};
