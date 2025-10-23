<?php

namespace App\Filament\Resources\EvaluasiKompetensiResource\Pages;

use App\Filament\Resources\EvaluasiKompetensiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEvaluasiKompetensis extends ListRecords
{
    protected static string $resource = EvaluasiKompetensiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
