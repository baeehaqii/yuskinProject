<?php

namespace App\Filament\Resources\YskPenjualanResource\Pages;

use App\Filament\Resources\YskPenjualanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditYskPenjualan extends EditRecord
{
    protected static string $resource = YskPenjualanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
