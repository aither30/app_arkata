<?php

namespace App\Filament\Resources\KibFResource\Pages;

use App\Filament\Resources\KibFResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKibFS extends ListRecords
{
    protected static string $resource = KibFResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
