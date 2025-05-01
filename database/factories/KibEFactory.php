<?php

namespace Database\Factories;

use App\Models\KibE;
use Illuminate\Database\Eloquent\Factories\Factory;

class KibEFactory extends Factory
{
    protected $model = KibE::class;

    public function definition()
    {
        return [
            'nama_barang' => $this->faker->word,
            'kode_barang' => $this->faker->unique()->word,
            'nomor_register' => $this->faker->unique()->word,
            'judul_pencipta' => $this->faker->word,
            'spesifikasi' => $this->faker->text,
            'asal_daerah' => $this->faker->word,
            'pencipta' => $this->faker->word,
            'bahan' => $this->faker->word,
            'jenis' => $this->faker->word,
            'ukuran' => $this->faker->word,
            'jumlah' => $this->faker->randomNumber(),
            'tahun_cetak_pembelian' => $this->faker->year,
            'asal_usul' => $this->faker->word,
            'harga' => $this->faker->randomFloat(2, 1000, 100000),
        ];
    }
}
