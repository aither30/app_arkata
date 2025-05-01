<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kib_d', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_barang');
            $table->string('kode_barang');
            $table->string('nomor_register');
            $table->string('konstruksi');
            $table->decimal('panjang', 10, 2);
            $table->decimal('lebar', 10, 2);
            $table->decimal('luas', 12, 2);
            $table->string('lokasi');
            $table->date('tanggal_dokumen');
            $table->string('nomor_dokumen');
            $table->string('status_tanah');
            $table->string('nomor_kode_tanah');
            $table->string('asal_usul');
            $table->enum('kondisi', ['B', 'KB', 'RB']);
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kib_d');
    }
};
