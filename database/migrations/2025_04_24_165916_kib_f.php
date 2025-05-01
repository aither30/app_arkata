<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kib_f', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_barang');
            $table->string('konstruksi_bertingkat');
            $table->string('konstruksi_beton');
            $table->decimal('luas', 12, 2);
            $table->string('lokasi');
            $table->date('tanggal_dokumen');
            $table->string('nomor_dokumen');
            $table->date('tanggal_mulai');
            $table->string('status_tanah');
            $table->string('nomor_kode_tanah');
            $table->string('asal_usul');
            $table->decimal('nilai_kontrak', 15, 2);
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kib_f');
    }
};
