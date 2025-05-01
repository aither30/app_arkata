<?php

namespace App\Filament\Resources\PengadaanBarangInventarisResource\Pages;

use App\Filament\Resources\PengadaanBarangInventarisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPengadaanBarangInventaris extends EditRecord
{
    protected static string $resource = PengadaanBarangInventarisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
