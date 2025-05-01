<?php

namespace App\Filament\Resources\PengadaanBarangInventarisResource\Pages;

use App\Filament\Resources\PengadaanBarangInventarisResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPengadaanBarangInventaris extends ListRecords
{
    protected static string $resource = PengadaanBarangInventarisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
