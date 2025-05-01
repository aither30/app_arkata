<?php

namespace App\Filament\Resources\KibCResource\Pages;

use App\Filament\Resources\KibCResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKibCS extends ListRecords
{
    protected static string $resource = KibCResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
