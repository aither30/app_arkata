<?php

namespace App\Filament\Resources\MutasiKeluarKibAResource\Pages;

use App\Filament\Resources\MutasiKeluarKibAResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMutasiKeluarKibA extends EditRecord
{
    protected static string $resource = MutasiKeluarKibAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
