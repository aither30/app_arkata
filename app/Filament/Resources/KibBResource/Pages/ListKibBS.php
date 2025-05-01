<?php

namespace App\Filament\Resources\KibBResource\Pages;

use App\Filament\Resources\KibBResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKibBS extends ListRecords
{
    protected static string $resource = KibBResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
