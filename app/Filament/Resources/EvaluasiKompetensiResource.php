<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EvaluasiKompetensiResource\Pages;
use App\Filament\Resources\EvaluasiKompetensiResource\RelationManagers;
use App\Models\EvaluasiKompetensi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EvaluasiKompetensiResource extends Resource
{
    protected static ?string $model = EvaluasiKompetensi::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationGroup = 'Data Evaluasi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('aspek')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kriteria')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('aspek'),
                Tables\Columns\TextColumn::make('kriteria'),
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
            'index' => Pages\ListEvaluasiKompetensis::route('/'),
            'create' => Pages\CreateEvaluasiKompetensi::route('/create'),
            'edit' => Pages\EditEvaluasiKompetensi::route('/{record}/edit'),
        ];
    }
}
