<?php

namespace App\Filament\Resources\StandarOperasionalResource\Pages;

use App\Filament\Resources\StandarOperasionalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStandarOperasionals extends ListRecords
{
    protected static string $resource = StandarOperasionalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Add Data')
                ->icon('heroicon-o-plus')
                ->url(StandarOperasionalResource::getUrl('create'))
                ->button(),
        ];
    }
}
