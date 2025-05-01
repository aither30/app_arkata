<?php

namespace Database\Factories;

use App\Models\SuratMasuk;
use Illuminate\Database\Eloquent\Factories\Factory;

class SuratMasukFactory extends Factory
{
    protected $model = SuratMasuk::class;

    public function definition()
    {
        return [
            'tanggal_terima' => $this->faker->date(),
            'pengirim' => $this->faker->company,
            'nomor_surat' => $this->faker->bothify('??###/####'),
            'hal_isi_surat' => $this->faker->sentence,
            'lampiran' => $this->faker->word,
            'diteruskan_kepada' => $this->faker->name,
            'keterangan' => $this->faker->optional()->sentence,
        ];
    }
}
