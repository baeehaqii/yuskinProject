<?php

namespace App\Filament\Resources\YskDaftarAsetTetapResource\Pages;

use App\Filament\Resources\YskDaftarAsetTetapResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditYskDaftarAsetTetap extends EditRecord
{
    protected static string $resource = YskDaftarAsetTetapResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
