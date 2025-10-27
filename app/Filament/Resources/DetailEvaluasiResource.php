<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DetailEvaluasiResource\Pages;
use App\Filament\Resources\DetailEvaluasiResource\RelationManagers;
use App\Models\DetailEvaluasi;
use Filament\Forms;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DetailEvaluasiResource extends Resource
{
    protected static ?string $model = DetailEvaluasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Data Evaluasi';

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
                Tables\Columns\TextColumn::make('evaluasi_kompetensi.aspek'),
                Tables\Columns\TextColumn::make('evaluasi_kompetensi.kriteria'),
                Tables\Columns\TextColumn::make('skor'),
                Tables\Columns\TextColumn::make('user.name')->label('Nama Perawat')->searchable(),
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
            'index' => Pages\ListDetailEvaluasis::route('/'),
            'create' => Pages\CreateDetailEvaluasi::route('/create'),
            'edit' => Pages\EditDetailEvaluasi::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    
}
