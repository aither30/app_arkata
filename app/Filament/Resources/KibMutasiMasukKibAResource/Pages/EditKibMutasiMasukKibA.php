<?php

namespace App\Filament\Resources\KibMutasiMasukKibAResource\Pages;

use App\Filament\Resources\KibMutasiMasukKibAResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKibMutasiMasukKibA extends EditRecord
{
    protected static string $resource = KibMutasiMasukKibAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
