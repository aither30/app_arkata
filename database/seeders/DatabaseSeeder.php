<?php

namespace Database\Seeders;

use App\Models\KibA;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\KibB;
use App\Models\KibC;
use App\Models\KibD;
use App\Models\KibE;
use App\Models\KibF;
use App\Models\User;
use App\Models\SuratMasuk;
use App\Models\SuratKeluar;
use App\Models\KibRekapitulasi;
use Illuminate\Database\Seeder;
use App\Models\MutasiKeluarKibA;
use App\Models\KibMutasiMasukKibA;
use Illuminate\Support\Facades\Hash;
use App\Models\PengadaanBarangInventaris;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Alpi Darul Hakim',
            'email' => 'alpidarulhakim30@gmail.com',
            'password' => Hash::make('alpi30051503'),
        ]);

        KibA::factory(15)->create();
        KibB::factory(15)->create();
        KibC::factory(15)->create();
        KibD::factory(15)->create();
        KibE::factory(15)->create();
        KibF::factory(15)->create();
        KibRekapitulasi::factory(15)->create();
        KibMutasiMasukKibA::factory(15)->create();
        PengadaanBarangInventaris::factory(15)->create();
        MutasiKeluarKibA::factory(15)->create();
        SuratKeluar::factory()->count(10)->create();
        SuratMasuk::factory()->count(10)->create();
    }
}
