<?php

namespace App\Filament\Resources\KibRekapitulasiResource\Pages;

use App\Filament\Resources\KibRekapitulasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKibRekapitulasis extends ListRecords
{
    protected static string $resource = KibRekapitulasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
