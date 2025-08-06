<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StandarPelayananResource\Pages;
use App\Filament\Resources\StandarPelayananResource\RelationManagers;
use App\Models\Post;
use App\Models\StandarPelayanan;
use Filament\Forms\Components\Section;

use Faker\Core\File;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;

use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;

use Filament\Tables\Columns\TextColumn;

use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class StandarPelayananResource extends Resource
{
    protected static ?string $model = StandarPelayanan::class;

    protected static ?string $navigationGroup = 'Data Perizinan Management';

    protected static ?string $navigationLabel = 'Standar Pelayanan';

    protected static ?string $navigationIcon = 'heroicon-s-document-text';

    protected static ?string $pluralModelLabel = 'Standar Pelayanan';

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
//            ->query(StandarPelayanan::query()->with('standar_palayanans'))
            ->defaultSort('created_at', 'desc')
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
                    ->label('Nama Izin'),
//                TextColumn::make('file')
//                    ->label('Berkas Izin')
//                    ->hidden()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->after(function (StandarPelayanan $record) {
                        if($record->file) {
                            Storage::disk('public')->delete($record->file);
                        }
                    }),
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
