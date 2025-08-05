<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StandarPelayananResource\Pages;
use App\Filament\Resources\StandarPelayananResource\RelationManagers;
use App\Models\Post;
use App\Models\StandarPelayanan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StandarPelayananResource extends Resource
{
    protected static ?string $model = StandarPelayanan::class;

    protected static ?string $navigationGroup = 'Perizinan Management';

    protected static ?string $navigationLabel = 'Standar Pelayanan';

    protected static ?string $navigationIcon = 'heroicon-s-document-text';

    protected static ?string $pluralModelLabel = 'Standar Pelayanan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            // When Table empty, show a custom message and action
            ->query(StandarPelayanan::query()->with('standar_palayanans'))
            ->defaultSort('published_at', 'desc')
            ->emptyStateActions([
                Action::make('Create Data')
                    ->label('Create New Data')
                    ->icon('heroicon-o-plus')
                    ->url(static::getUrl('create'))
                    ->color('primary'),
            ])
            ->emptyStateHeading('No Data Found')
            ->emptyStateDescription('You have not created any data yet. Click the button below to create your first data.')
            ->emptyStateIcon('heroicon-o-document-text')

            ->columns([

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStandarPelayanans::route('/'),
            'create' => Pages\CreateStandarPelayanan::route('/create'),
            'edit' => Pages\EditStandarPelayanan::route('/{record}/edit'),
        ];
    }
}
