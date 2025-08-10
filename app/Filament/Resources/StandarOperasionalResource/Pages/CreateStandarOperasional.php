<?php

namespace App\Filament\Resources\StandarOperasionalResource\Pages;

use App\Filament\Resources\StandarOperasionalResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateStandarOperasional extends CreateRecord
{
    protected static string $resource = StandarOperasionalResource::class;

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
