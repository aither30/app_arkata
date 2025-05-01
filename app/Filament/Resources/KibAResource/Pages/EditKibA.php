<?php

namespace App\Filament\Resources\KibAResource\Pages;

use App\Filament\Resources\KibAResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKibA extends EditRecord
{
    protected static string $resource = KibAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
