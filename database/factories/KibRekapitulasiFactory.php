<?php

namespace Database\Factories;

use App\Models\KibRekapitulasi;
use Illuminate\Database\Eloquent\Factories\Factory;

class KibRekapitulasiFactory extends Factory
{
    protected $model = KibRekapitulasi::class;

    public function definition()
    {
        return [
            'jenis_barang' => $this->faker->word,
            'tanggal_surat_pesanan' => $this->faker->date(),
            'nomor_surat_pesanan' => $this->faker->word,
            'tanggal_dpa_spm' => $this->faker->date(),
            'nomor_dpa_spm' => $this->faker->word,
            'jumlah_barang' => $this->faker->randomNumber(2),
            'harga_satuan' => $this->faker->randomFloat(2, 1000, 50000),
            'jumlah_harga' => $this->faker->randomFloat(2, 10000, 500000),
            'dipergunakan_untuk' => $this->faker->sentence,
            'keterangan' => $this->faker->text,
        ];
    }
}
