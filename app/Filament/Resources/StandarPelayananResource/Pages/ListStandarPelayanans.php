<?php

namespace App\Filament\Resources\StandarPelayananResource\Pages;

use App\Filament\Resources\PostResource;
use App\Filament\Resources\StandarPelayananResource;
use App\Models\StandarPelayanan;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStandarPelayanans extends ListRecords
{
    protected static string $resource = StandarPelayananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Add Data')
                ->icon('heroicon-o-plus')
                ->url(StandarPelayananResource::getUrl('create'))
                ->button(),
        ];
    }
}
