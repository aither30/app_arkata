<?php

namespace App\Http\Controllers;

use App\Models\KibA;
use App\Models\KibB;
use App\Models\KibC;
use App\Models\KibD;
use App\Models\KibE;
use App\Models\KibF;
use App\Models\KibRekapitulasi;
use App\Models\MutasiKeluarKibA;
use App\Models\KibMutasiMasukKibA;
use App\Models\PengadaanBarangInventaris;
use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class KibController extends Controller
{
    public function manage(Request $request)
    {
        $month = $request->input('month');
        $year = $request->input('year');

        $data = [
            'Kartu Inventaris Barang A - Tanah' => [
                'totalMonth' => $this->filterByMonthYear(KibA::query(), $month, $year)->count(),
                'totalAll' => KibA::count(),
            ],
            'Kartu Inventaris Barang B' => [
                'totalMonth' => $this->filterByMonthYear(KibB::query(), $month, $year)->count(),
                'totalAll' => KibB::count(),
            ],
            'Kartu Inventaris Barang C' => [
                'totalMonth' => $this->filterByMonthYear(KibC::query(), $month, $year)->count(),
                'totalAll' => KibC::count(),
            ],
            'Kartu Inventaris Barang D' => [
                'totalMonth' => $this->filterByMonthYear(KibD::query(), $month, $year)->count(),
                'totalAll' => KibD::count(),
            ],
            'Kartu Inventaris Barang E' => [
                'totalMonth' => $this->filterByMonthYear(KibE::query(), $month, $year)->count(),
                'totalAll' => KibE::count(),
            ],
            'Kartu Inventaris Barang F' => [
                'totalMonth' => $this->filterByMonthYear(KibF::query(), $month, $year)->count(),
                'totalAll' => KibF::count(),
            ],
            'Rekapitulasi' => [
                'totalMonth' => $this->filterByMonthYear(KibRekapitulasi::query(), $month, $year)->count(),
                'totalAll' => KibRekapitulasi::count(),
            ],
            'Mutasi Masuk' => [
                'totalMonth' => $this->filterByMonthYear(KibMutasiMasukKibA::query(), $month, $year)->count(),
                'totalAll' => KibMutasiMasukKibA::count(),
            ],
            'Mutasi Keluar' => [
                'totalMonth' => $this->filterByMonthYear(MutasiKeluarKibA::query(), $month, $year)->count(),
                'totalAll' => MutasiKeluarKibA::count(),
            ],
            'Pengadaan' => [
                'totalMonth' => $this->filterByMonthYear(PengadaanBarangInventaris::query(), $month, $year)->count(),
                'totalAll' => PengadaanBarangInventaris::count(),
            ],
            'Surat Masuk' => [
                'totalMonth' => $this->filterByMonthYear(SuratMasuk::query(), $month, $year)->count(),
                'totalAll' => SuratMasuk::count(),
            ],
            'Surat Keluar' => [
                'totalMonth' => $this->filterByMonthYear(SuratKeluar::query(), $month, $year)->count(),
                'totalAll' => SuratKeluar::count(),
            ],
        ];

        $totalSemuaAll = collect($data)->sum('totalAll');

        return view('welcome', [
            'chartData' => $data,
            'totalAll' => $totalSemuaAll,
        ]);
    }

    protected function filterByMonthYear($query, $month, $year)
    {
        return $query->when($month, function ($q) use ($month) {
            $q->whereMonth('created_at', $month);
        })->when($year, function ($q) use ($year) {
            $q->whereYear('created_at', $year);
        });
    }
}
