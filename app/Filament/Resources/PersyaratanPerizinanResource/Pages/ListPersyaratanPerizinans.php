<?php

namespace App\Filament\Resources\PersyaratanPerizinanResource\Pages;

use App\Filament\Resources\PersyaratanPerizinanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPersyaratanPerizinans extends ListRecords
{
    protected static string $resource = PersyaratanPerizinanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
