<?php

namespace App\Filament\Resources\StandarPelayananResource\Pages;

use App\Filament\Resources\StandarPelayananResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStandarPelayanan extends EditRecord
{
    protected static string $resource = StandarPelayananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
