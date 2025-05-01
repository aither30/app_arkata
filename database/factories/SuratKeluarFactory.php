<?php

namespace Database\Factories;

use App\Models\SuratKeluar;
use Illuminate\Database\Eloquent\Factories\Factory;

class SuratKeluarFactory extends Factory
{
    protected $model = SuratKeluar::class;

    public function definition()
    {
        return [
            'tanggal' => $this->faker->date(),
            'nomor_surat' => $this->faker->bothify('??###/####'),
            'index_surat' => $this->faker->word,
            'dikirimkan_kepada' => $this->faker->company,
            'isi_surat' => $this->faker->optional()->sentence,
            'keterangan' => $this->faker->optional()->sentence,
        ];
    }
}
