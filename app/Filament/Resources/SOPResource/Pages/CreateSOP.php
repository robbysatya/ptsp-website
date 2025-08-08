<?php

namespace App\Filament\Resources\SOPResource\Pages;

use App\Filament\Resources\SOPResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSOP extends CreateRecord
{
    protected static string $resource = SOPResource::class;

    protected ?string $heading = 'Add Data SOP';
//    protected ?string $title = 'Add Data (SOP)';

    public function getTitle():string
    {
        return 'Add Data SOP';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}
