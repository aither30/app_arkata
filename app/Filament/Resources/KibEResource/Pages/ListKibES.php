<?php

namespace App\Filament\Resources\KibEResource\Pages;

use App\Filament\Resources\KibEResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKibES extends ListRecords
{
    protected static string $resource = KibEResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
