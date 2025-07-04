<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Password;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;

use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'User Management';
    protected static ?string $navigationLabel = 'Users';
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true),
                TextInput::make('email')
                    ->label('Email')
                    ->required()
                    ->email()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                TextInput::make('password')
                    ->label('Password')
                    ->password()
                    ->required(fn (string $operation): bool => $operation === 'create')
                    ->minLength(8)
                    ->dehydrated(fn ($state) => filled($state))
                    ->revealable(),
                Select::make('role')
                    ->label('Role')
                    ->options([
                        'super_admin' => 'Super Admin',
                        'admin' => 'Admin',
                        'user' => 'User',
                        'editor' => 'Editor',
                    ]),
                Toggle::make('status')
                    ->label('Status')
                    ->required()
                    ->inline(false)
                    ->onColor('success')
                    ->offColor('danger'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('role')
                    ->label('Role')
                    ->sortable()
                    ->searchable()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'super_admin' => 'Super Admin',
                        'admin' => 'Admin',
                        'user' => 'User',
                        'editor' => 'Editor',
                    }),
                IconColumn::make('status')
                    ->label('Status')
                    ->boolean(),
                    // ->getStateUsing(fn ($record) => $record->role ?? 'user'),
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

    public static function beforeSave($record, $data): void
    {
        if (isset($data['password']) && $data['password']) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
