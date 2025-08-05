<?php

namespace App\Filament\Resources\PersyaratanPerizinanResource\Pages;

use App\Filament\Resources\PersyaratanPerizinanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPersyaratanPerizinan extends EditRecord
{
    protected static string $resource = PersyaratanPerizinanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
