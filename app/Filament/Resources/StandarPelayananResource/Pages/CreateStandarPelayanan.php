<?php

namespace App\Filament\Resources\StandarPelayananResource\Pages;

use App\Filament\Resources\StandarPelayananResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateStandarPelayanan extends CreateRecord
{
    protected static string $resource = StandarPelayananResource::class;

    protected ?string $heading = 'Add Data Standar Pelayanan';

    public function getTitle():string
    {
        return 'Add Data Standar Pelayanan';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}
