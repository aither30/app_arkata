<?php

namespace App\Filament\Resources\MutasiKeluarKibAResource\Pages;

use App\Filament\Resources\MutasiKeluarKibAResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMutasiKeluarKibAS extends ListRecords
{
    protected static string $resource = MutasiKeluarKibAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
