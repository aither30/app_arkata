<?php

namespace App\Filament\Resources\KibAResource\Pages;

use App\Filament\Resources\KibAResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKibAS extends ListRecords
{
    protected static string $resource = KibAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
