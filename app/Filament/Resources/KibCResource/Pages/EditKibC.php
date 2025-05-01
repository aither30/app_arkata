<?php

namespace App\Filament\Resources\KibCResource\Pages;

use App\Filament\Resources\KibCResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKibC extends EditRecord
{
    protected static string $resource = KibCResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
