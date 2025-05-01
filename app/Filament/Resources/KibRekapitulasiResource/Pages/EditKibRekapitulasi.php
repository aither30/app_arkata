<?php

namespace App\Filament\Resources\KibRekapitulasiResource\Pages;

use App\Filament\Resources\KibRekapitulasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKibRekapitulasi extends EditRecord
{
    protected static string $resource = KibRekapitulasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
