<?php

namespace App\Filament\Resources\EvaluasiKompetensiResource\Pages;

use App\Filament\Resources\EvaluasiKompetensiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEvaluasiKompetensi extends EditRecord
{
    protected static string $resource = EvaluasiKompetensiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
