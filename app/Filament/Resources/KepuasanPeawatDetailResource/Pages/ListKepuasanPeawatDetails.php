<?php

namespace App\Filament\Resources\KepuasanPeawatDetailResource\Pages;

use App\Filament\Resources\KepuasanPeawatDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKepuasanPeawatDetails extends ListRecords
{
    protected static string $resource = KepuasanPeawatDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
