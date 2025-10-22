<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'Data Master';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('email')
                ->email()
                ->required()
                ->unique(ignoreRecord: true),
                Forms\Components\TextInput::make('password')
                ->password()
                ->required(fn($record) => $record === null)
                ->dehydrateStateUsing(fn($state) => bcrypt($state))
                ->dehydrated(fn($state) => filled($state)),
                Forms\Components\Select::make('role')
                ->options([
                'admin' => 'Admin',
                'user' => 'User',
                ])
                ->default('user')
                ->required(),
                TextInput::make('alamat'),
                TextInput::make('phone'),
                DatePicker::make('tanggal_lahir'),
                Select::make('jenis_kelamin')->options([
                    'Laki-laki' => 'Laki-laki',
                    'Perempuan' => 'Perempuan',
                ]),
                Select::make('jabatan')->options([
                    'Staff' => 'Staff Pelaksana',
                    'Karu'  => 'Kepala Ruangan',
                    'Percobaan'   => 'Masa Percobaan',
                ]),
                TextInput::make('department'),
                DatePicker::make('tanggal_masuk'),
                Select::make('status_kerja')->options([
                    'Kontrak' => 'Kontrak',
                    'Tetap'   => 'Tetap',
                    'Magang'  => 'Magang'
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Nama')->searchable(),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('phone')->label('No HP'),
                Tables\Columns\TextColumn::make('jabatan'),
                Tables\Columns\TextColumn::make('department')->label('Departemen'),
                Tables\Columns\TextColumn::make('status_kerja')->label('Status Kerja')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                   
                    'Kontrak' => 'warning',
                    'Tetap' => 'success',
                    'Magang' => 'danger',
                }),
                Tables\Columns\TextColumn::make('tanggal_masuk')->date('d M Y')->label('Tanggal Masuk'),
            ])
            ->filters([
                //filter

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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
