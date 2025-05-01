<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Filament\Resources\Resource;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Tabel KIB-A
        Schema::create('kib_a', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_barang');
            $table->string('nomor_kode_barang');
            $table->string('nomor_register');
            $table->decimal('luas_tanah', 10, 2);
            $table->year('tahun_pengadaan');
            $table->string('letak');
            $table->string('hak');
            $table->date('tanggal_serifikat');
            $table->string('nomor_serifikat');
            $table->string('asal_usul');
            $table->decimal('harga', 15, 2);
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kib_a');
    }
};
