<?php

namespace App\Filament\Resources\SOPResource\Pages;

use App\Filament\Resources\SOPResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSOPS extends ListRecords
{
    protected static string $resource = SOPResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
