<?php

namespace App\Filament\Resources\YskDataCabangResource\Pages;

use App\Filament\Resources\YskDataCabangResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditYskDataCabang extends EditRecord
{
    protected static string $resource = YskDataCabangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
