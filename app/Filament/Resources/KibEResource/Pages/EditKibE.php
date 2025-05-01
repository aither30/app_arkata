<?php

namespace App\Filament\Resources\KibEResource\Pages;

use App\Filament\Resources\KibEResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKibE extends EditRecord
{
    protected static string $resource = KibEResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
