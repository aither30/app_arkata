<?php

namespace App\Filament\Resources\KibDResource\Pages;

use App\Filament\Resources\KibDResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKibD extends EditRecord
{
    protected static string $resource = KibDResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
