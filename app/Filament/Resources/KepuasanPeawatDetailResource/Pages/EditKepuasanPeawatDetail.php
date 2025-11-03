<?php

namespace App\Filament\Resources\KepuasanPeawatDetailResource\Pages;

use App\Filament\Resources\KepuasanPeawatDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKepuasanPeawatDetail extends EditRecord
{
    protected static string $resource = KepuasanPeawatDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
