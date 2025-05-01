<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Tabel KIB-A
        Schema::create('kib_c', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_barang');
            $table->string('kode_barang');
            $table->string('nomor_register');
            $table->string('kondisi_bangunan');
            $table->string('bertingkat');
            $table->string('beton');
            $table->decimal('luas_lantai', 10, 2);
            $table->string('lokasi');
            $table->date('tanggal_dokumen_gedung');
            $table->string('nomor_dokumen_gedung');
            $table->decimal('luas', 10, 2);
            $table->string('status_tanah');
            $table->string('harga');
            $table->string('nomor_kode_tanah');
            $table->string('asal');
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kib_c');
    }
};
