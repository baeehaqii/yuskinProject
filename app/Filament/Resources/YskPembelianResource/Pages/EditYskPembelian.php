<?php

namespace App\Filament\Resources\YskPembelianResource\Pages;

use App\Filament\Resources\YskPembelianResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditYskPembelian extends EditRecord
{
    protected static string $resource = YskPembelianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
