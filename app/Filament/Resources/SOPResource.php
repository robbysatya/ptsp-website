<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SOPResource\Pages;
use App\Filament\Resources\SOPResource\RelationManagers;
use App\Models\SOP;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SOPResource extends Resource
{
    protected static ?string $model = SOP::class;

    protected static ?string $navigationGroup = 'Data Perizinan Management';

    protected static ?string $navigationLabel = 'Standar Operasional (SOP)';

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
            'index' => Pages\ListSOPS::route('/'),
            'create' => Pages\CreateSOP::route('/create'),
            'edit' => Pages\EditSOP::route('/{record}/edit'),
        ];
    }
}
