<?php

namespace Database\Factories;

use App\Models\KibA;
use Illuminate\Database\Eloquent\Factories\Factory;

class KibAFactory extends Factory
{
    protected $model = KibA::class;

    public function definition()
    {
        return [
            'nama_barang' => $this->faker->word,
            'nomor_kode_barang' => $this->faker->unique()->word,
            'nomor_register' => $this->faker->unique()->word,
            'luas_tanah' => $this->faker->randomFloat(2, 100, 1000),
            'tahun_pengadaan' => $this->faker->year(),
            'letak' => $this->faker->word,
            'hak' => $this->faker->word,
            'tanggal_serifikat' => $this->faker->date(),
            'nomor_serifikat' => $this->faker->word,
            'asal_usul' => $this->faker->word,
            'harga' => $this->faker->randomFloat(2, 10000, 1000000),
            'keterangan' => $this->faker->paragraph,
        ];
    }
}
