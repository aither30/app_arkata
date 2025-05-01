<?php

namespace Database\Factories;

use App\Models\KibC;
use Illuminate\Database\Eloquent\Factories\Factory;

class KibCFactory extends Factory
{
    protected $model = KibC::class;

    public function definition()
    {
        return [
            'nama_barang' => $this->faker->word,
            'kode_barang' => $this->faker->unique()->word,
            'nomor_register' => $this->faker->unique()->word,
            'kondisi_bangunan' => $this->faker->word,
            'bertingkat' => $this->faker->word,
            'beton' => $this->faker->word,
            'luas_lantai' => $this->faker->randomFloat(2, 10, 1000),
            'lokasi' => $this->faker->address,
            'tanggal_dokumen_gedung' => $this->faker->date(),
            'nomor_dokumen_gedung' => $this->faker->word,
            'luas' => $this->faker->randomFloat(2, 10, 1000),
            'status_tanah' => $this->faker->word,
            'harga' => $this->faker->randomFloat(2, 100000, 1000000),
            'nomor_kode_tanah' => $this->faker->word,
            'asal' => $this->faker->word,
            'keterangan' => $this->faker->paragraph,
        ];
    }
}
