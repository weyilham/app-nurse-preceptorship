<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ForumResource\Pages;
use App\Models\Forum;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ForumResource extends Resource
{
    protected static ?string $model = Forum::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected static ?string $navigationLabel = 'Forum Diskusi';
    protected static ?string $navigationGroup = 'Manajemen Konten';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->label('Judul Diskusi')
                    ->required()
                    ->maxLength(255),

                Forms\Components\RichEditor::make('deskripsi')
                    ->label('Deskripsi')
                    ->toolbarButtons([
                        'bold', 'italic', 'underline', 'strike',
                        'bulletList', 'orderedList', 'link',
                    ])
                    ->required()
                    ->columnSpanFull()
                    ->placeholder('Tulis deskripsi forum di sini...'),

                Forms\Components\TextInput::make('kategori')
                    ->label('Kategori')
                    ->maxLength(100),

                Forms\Components\Select::make('penulis')
                    ->label('Penulis')
                    ->required()
                    ->options(
                        User::pluck('name', 'id') // ambil nama & id user
                    )
                    ->searchable()
                    ->preload()
                    ->native(false)
                    ->placeholder('Pilih Penulis'),
                Forms\Components\FileUpload::make('gambar')
                    ->label('Gambar')
                    ->image()
                    ->maxSize(2048)
                    ->directory('forum-images'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul'),
                Tables\Columns\TextColumn::make('kategori'),
                Tables\Columns\TextColumn::make('userPenulis.name')
                ->label('Penulis')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable(),
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
            'index' => Pages\ListForums::route('/'),
            'create' => Pages\CreateForum::route('/create'),
            'edit' => Pages\EditForum::route('/{record}/edit'),
        ];
    }
}
