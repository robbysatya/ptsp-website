<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PeraturanRegulasiResource\Pages;
use App\Filament\Resources\PeraturanRegulasiResource\RelationManagers;
use App\Models\PeraturanRegulasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PeraturanRegulasiResource extends Resource
{
    protected static ?string $model = PeraturanRegulasi::class;

    protected static ?string $navigationGroup = 'Data Perizinan Management';

    protected static ?string $navigationLabel = 'Peraturan dan Regulasi';

    protected static ?string $navigationIcon = 'heroicon-s-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

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
            'index' => Pages\ListPeraturanRegulasis::route('/'),
            'create' => Pages\CreatePeraturanRegulasi::route('/create'),
            'edit' => Pages\EditPeraturanRegulasi::route('/{record}/edit'),
        ];
    }
}
