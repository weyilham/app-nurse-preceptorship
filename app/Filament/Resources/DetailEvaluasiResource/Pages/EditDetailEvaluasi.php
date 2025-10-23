<?php

namespace App\Filament\Resources\DetailEvaluasiResource\Pages;

use App\Filament\Resources\DetailEvaluasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDetailEvaluasi extends EditRecord
{
    protected static string $resource = DetailEvaluasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
