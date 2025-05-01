<?php

namespace Database\Factories;

use App\Models\KibB;
use Illuminate\Database\Eloquent\Factories\Factory;

class KibBFactory extends Factory
{
    protected $model = KibB::class;

    public function definition()
    {
        return [
            'kode_barang' => $this->faker->unique()->word,
            'nama_barang' => $this->faker->word,
            'nomor_register' => $this->faker->unique()->word,
            'merk' => $this->faker->word,
            'ukuran' => $this->faker->randomFloat(2, 1, 100),
            'bahan' => $this->faker->word,
            'tahun_pembelian' => $this->faker->year(),
            'pabrik' => $this->faker->word,
            'rangka' => $this->faker->word,
            'mesin' => $this->faker->word,
            'polisi' => $this->faker->word,
            'bpkb' => $this->faker->word,
            'asal' => $this->faker->word,
            'harga' => $this->faker->randomFloat(2, 100000, 1000000),
            'keterangan' => $this->faker->paragraph,
        ];
    }
}
