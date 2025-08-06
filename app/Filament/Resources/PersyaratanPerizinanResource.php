<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PersyaratanPerizinanResource\Pages;
use App\Filament\Resources\PersyaratanPerizinanResource\RelationManagers;
use App\Models\PersyaratanPerizinan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PersyaratanPerizinanResource extends Resource
{
    protected static ?string $model = PersyaratanPerizinan::class;

    protected static ?string $navigationGroup = 'Data Perizinan Management';

    protected static ?string $navigationLabel = 'Persyaratan dan Perizinan';

    protected static ?string $navigationIcon = 'heroicon-s-document-text';

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
            ->columns([
                //
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
            'index' => Pages\ListPersyaratanPerizinans::route('/'),
            'create' => Pages\CreatePersyaratanPerizinan::route('/create'),
            'edit' => Pages\EditPersyaratanPerizinan::route('/{record}/edit'),
        ];
    }
}
