<?php

namespace App\Filament\Resources\KibMutasiMasukKibAResource\Pages;

use App\Filament\Resources\KibMutasiMasukKibAResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKibMutasiMasukKibAS extends ListRecords
{
    protected static string $resource = KibMutasiMasukKibAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
