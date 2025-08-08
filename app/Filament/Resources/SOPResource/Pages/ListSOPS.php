<?php

namespace App\Filament\Resources\SOPResource\Pages;

use App\Filament\Resources\SOPResource;
use App\Filament\Resources\StandarPelayananResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSOPS extends ListRecords
{
    protected static string $resource = SOPResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Add Data')
            ->icon('heroicon-o-plus')
            ->url(SOPResource::getUrl('create'))
            ->button(),
        ];
    }
}
