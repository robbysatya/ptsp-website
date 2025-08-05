<?php

namespace App\Filament\Resources\PeraturanRegulasiResource\Pages;

use App\Filament\Resources\PeraturanRegulasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPeraturanRegulasi extends EditRecord
{
    protected static string $resource = PeraturanRegulasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
