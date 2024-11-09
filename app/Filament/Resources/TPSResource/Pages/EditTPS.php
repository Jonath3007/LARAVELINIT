<?php

namespace App\Filament\Resources\TPSResource\Pages;

use App\Filament\Resources\TPSResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTPS extends EditRecord
{
    protected static string $resource = TPSResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
