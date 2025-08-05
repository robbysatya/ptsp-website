<?php

namespace App\Filament\Resources\SOPResource\Pages;

use App\Filament\Resources\SOPResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSOP extends EditRecord
{
    protected static string $resource = SOPResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
