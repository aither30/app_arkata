<?php

namespace Database\Factories;

use App\Models\KibF;
use Illuminate\Database\Eloquent\Factories\Factory;

class KibFFactory extends Factory
{
    protected $model = KibF::class;

    public function definition()
    {
        return [
            'nama_barang' => $this->faker->word,
            'konstruksi_bertingkat' => $this->faker->word,
            'konstruksi_beton' => $this->faker->word,
            'luas' => $this->faker->randomFloat(2, 10, 500),
            'lokasi' => $this->faker->word,
            'tanggal_dokumen' => $this->faker->date(),
            'nomor_dokumen' => $this->faker->word,
            'tanggal_mulai' => $this->faker->date(),
            'status_tanah' => $this->faker->word,
            'nomor_kode_tanah' => $this->faker->word,
            'asal_usul' => $this->faker->word,
            'nilai_kontrak' => $this->faker->randomFloat(2, 1000, 100000),
            'keterangan' => $this->faker->text,
        ];
    }
}
