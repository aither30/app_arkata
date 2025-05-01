<?php

namespace App\Filament\Exports;

use App\Models\KibA;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class KibAExporter extends Exporter
{
    protected static ?string $model = KibA::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('id')
                ->label('ID'),
            ExportColumn::make('nama_barang'),
            ExportColumn::make('nomor_kode_barang'),
            ExportColumn::make('nomor_register'),
            ExportColumn::make('luas_tanah'),
            ExportColumn::make('tahun_pengadaan'),
            ExportColumn::make('letak'),
            ExportColumn::make('hak'),
            ExportColumn::make('tanggal_serifikat'),
            ExportColumn::make('nomor_serifikat'),
            ExportColumn::make('asal_usul'),
            ExportColumn::make('harga'),
            ExportColumn::make('keterangan'),
            ExportColumn::make('created_at'),
            ExportColumn::make('updated_at'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your kib a export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
