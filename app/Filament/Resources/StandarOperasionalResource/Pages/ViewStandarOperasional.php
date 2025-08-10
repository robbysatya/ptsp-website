<?php

namespace App\Filament\Resources\StandarOperasionalResource\Pages;

use App\Filament\Resources\StandarOperasionalResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewStandarOperasional extends ViewRecord
{
    protected static string $resource = StandarOperasionalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
