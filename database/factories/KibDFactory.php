<?php

namespace Database\Factories;

use App\Models\KibD;
use Illuminate\Database\Eloquent\Factories\Factory;

class KibDFactory extends Factory
{
    protected $model = KibD::class;

    public function definition()
    {
        return [
            'nama_barang' => $this->faker->word,
            'kode_barang' => $this->faker->unique()->word,
            'nomor_register' => $this->faker->unique()->word,
            'konstruksi' => $this->faker->word,
            'panjang' => $this->faker->randomFloat(2, 10, 1000),
            'lebar' => $this->faker->randomFloat(2, 10, 1000),
            'luas' => $this->faker->randomFloat(2, 10, 1000),
            'lokasi' => $this->faker->address,
            'tanggal_dokumen' => $this->faker->date(),
            'nomor_dokumen' => $this->faker->word,
            'status_tanah' => $this->faker->word,
            'nomor_kode_tanah' => $this->faker->word,
            'asal_usul' => $this->faker->word,
            'kondisi' => $this->faker->randomElement(['B', 'KB', 'RB']),
            'keterangan' => $this->faker->paragraph,
        ];
    }
}
