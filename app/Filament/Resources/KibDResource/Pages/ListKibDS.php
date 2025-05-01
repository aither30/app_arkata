<?php

namespace App\Filament\Resources\KibDResource\Pages;

use App\Filament\Resources\KibDResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKibDS extends ListRecords
{
    protected static string $resource = KibDResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
