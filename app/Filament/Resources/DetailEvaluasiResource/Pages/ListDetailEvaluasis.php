<?php

namespace App\Filament\Resources\DetailEvaluasiResource\Pages;

use App\Filament\Resources\DetailEvaluasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDetailEvaluasis extends ListRecords
{
    protected static string $resource = DetailEvaluasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
