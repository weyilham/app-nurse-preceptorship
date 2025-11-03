<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KepuasanPeawatDetailResource\Pages;
use App\Filament\Resources\KepuasanPeawatDetailResource\RelationManagers;
use App\Models\KepuasanPerawatDetail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KepuasanPeawatDetailResource extends Resource
{
    protected static ?string $model = KepuasanPerawatDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark-square';
    protected static ?string $navigationGroup = 'Data Evaluasi';

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
                Tables\Columns\TextColumn::make('kepuasan_perawat.name')->label('Pernyataan')->searchable(),
                Tables\Columns\TextColumn::make('user.name')->label('Nama Perawat')->searchable(),
                Tables\Columns\TextColumn::make('score')->label('Skor'),
                Tables\Columns\TextColumn::make('created_at')->label('Tanggal'),
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
            'index' => Pages\ListKepuasanPeawatDetails::route('/'),
            'create' => Pages\CreateKepuasanPeawatDetail::route('/create'),
            'edit' => Pages\EditKepuasanPeawatDetail::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    
}
