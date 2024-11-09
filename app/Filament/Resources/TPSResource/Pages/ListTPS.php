<?php

namespace App\Filament\Resources\TPSResource\Pages;

use App\Filament\Resources\TPSResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTPS extends ListRecords
{
    protected static string $resource = TPSResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
