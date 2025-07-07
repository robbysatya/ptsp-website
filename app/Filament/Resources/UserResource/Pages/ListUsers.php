<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;
    protected static ?string $title = 'Daftar User';
    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Create User')
                ->icon('heroicon-o-plus')
                ->url(UserResource::getUrl('create'))
                ->button(),
        ];
    }
}
