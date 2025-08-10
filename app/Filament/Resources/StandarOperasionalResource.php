<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StandarOperasionalResource\Pages;
use App\Filament\Resources\StandarOperasionalResource\RelationManagers;
use App\Models\Sop;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StandarOperasionalResource extends Resource
{
    protected static ?string $model = SOP::class;

    protected static ?string $navigationGroup = 'Data Perizinan Management';

    protected static ?string $navigationLabel = 'Standar Operasional (SOP)';

    protected static ?string $navigationIcon = 'heroicon-s-document-text';

    protected static ?string $pluralModelLabel = 'Standar Operasional (SOP)';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->label('Nama Berkas')
                            ->maxLength(255),
                        FileUpload::make('file')
                            ->required()
                            ->directory('izin')
                            ->label('File Berkas')
                            ->acceptedFileTypes([
                                'application/pdf',
                            ])
                            ->openable()
                    ])
            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            // When Table empty, show a custom message and action
            ->defaultSort('id', 'desc')
            ->emptyStateActions([
                Action::make('Add Data')
                    ->label('Add New Data')
                    ->icon('heroicon-o-plus')
                    ->url(static::getUrl('create'))
                    ->color('primary'),
            ])
            ->emptyStateHeading('No Data Found')
            ->emptyStateDescription('You have not created any data yet. Only Accept PDF File')
            ->emptyStateIcon('heroicon-o-document-text')

            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->label('Nama SOP'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListStandarOperasionals::route('/'),
            'create' => Pages\CreateStandarOperasional::route('/create'),
            'view' => Pages\ViewStandarOperasional::route('/{record}'),
            'edit' => Pages\EditStandarOperasional::route('/{record}/edit'),
        ];
    }
}
