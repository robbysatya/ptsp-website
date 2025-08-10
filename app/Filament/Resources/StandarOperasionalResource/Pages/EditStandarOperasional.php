<?php

namespace App\Filament\Resources\StandarOperasionalResource\Pages;

use App\Filament\Resources\StandarOperasionalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStandarOperasional extends EditRecord
{
    protected static string $resource = StandarOperasionalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
