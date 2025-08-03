<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Section;

use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Forms\Set;
use Illuminate\Support\Facades\Storage;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Content Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Grid::make(2)
                        ->schema([
                           TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true) // Enable live updates
                            ->afterStateUpdated(function (Set $set, $state) {
                                // Automatically generate slug from name
                                $set('slug', Str::slug($state));
                            }),
                            TextInput::make('slug')
                                    ->required()
                                    ->maxLength(255),
                        ]),
                        RichEditor::make('content')
                            ->required()
                            ->columnSpanFull(),
                        DateTimePicker::make('published_at'),
                        Toggle::make('status')
                            ->required()
                            ->onColor('success')
                            ->offColor('danger'),
                    ])->columnSpan(8),
                Section::make()
                    ->schema([
                        FileUpload::make('thumbnail')
                            ->image()
                            ->required()
                            ->maxSize(1024)
                            ->directory('thumbnails')
                            ->visibility('public')
                            ->maxSize(1024), // 1MB
                        Select::make('category_id')
                            ->multiple()
                            ->label('Categories')
                            ->searchable()
                            ->preload() // Preload options on page load
                            ->relationship('categories', 'name'),
                    ])->columnSpan(4),

            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            // When Table empty, show a custom message and action
            ->query(Post::query()->with('user'))
            ->defaultSort('published_at', 'desc')
            ->emptyStateActions([
                Action::make('Create Post')
                    ->label('Create New Post')
                    ->icon('heroicon-o-plus')
                    ->url(static::getUrl('create'))
                    ->color('primary'),
            ])
            ->emptyStateHeading('No Posts Found')
            ->emptyStateDescription('You have not created any posts yet. Click the button below to create your first post.')
            ->emptyStateIcon('heroicon-o-document-text')

            // Tabel configuration
            ->columns([
                ImageColumn::make('thumbnail')
                    ->searchable(),
                TextColumn::make('title')
                    ->searchable(),
//                TextColumn::make('slug')
//                    ->searchable(),
                IconColumn::make('status')
                    ->boolean(),
                TextColumn::make('user.name')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'view' => Pages\ViewPost::route('/{record}'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
