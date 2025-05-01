<?php

namespace Database\Factories;

use App\Models\MutasiKeluarKibA;
use Illuminate\Database\Eloquent\Factories\Factory;

class MutasiKeluarKibAFactory extends Factory
{
    protected $model = MutasiKeluarKibA::class;

    public function definition()
    {
        return [
            'jenis_barang' => 'Tanah',
            'nama_barang' => $this->faker->word,
            'merk_type' => $this->faker->word,
            'no_sertifikat' => $this->faker->word,
            'asal_perolehan' => $this->faker->word,
            'bahan' => $this->faker->word,
            'tahun_beli' => $this->faker->year(),
            'ukuran_konstruksi' => $this->faker->word,
            'satuan' => $this->faker->word,
            'kondisi' => $this->faker->randomElement(['B', 'RR', 'RB']),
            'jumlah_barang_awal' => $this->faker->randomNumber(2),
            'harga_awal' => $this->faker->randomFloat(2, 1000, 50000),
            'mutasi_berkurang_jumlah' => $this->faker->randomNumber(2),
            'mutasi_berkurang_harga' => $this->faker->randomFloat(2, 1000, 50000),
            'mutasi_bertambah_jumlah' => $this->faker->randomNumber(2),
            'mutasi_bertambah_harga' => $this->faker->randomFloat(2, 1000, 50000),
            'jumlah_barang_akhir' => $this->faker->randomNumber(2),
            'harga_akhir' => $this->faker->randomFloat(2, 1000, 50000),
            'keterangan' => $this->faker->text,
        ];
    }
}
