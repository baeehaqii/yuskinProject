<?php

namespace App\Filament\Resources\YskPenerimaanPengeluaranResource\Pages;

use App\Filament\Resources\YskPenerimaanPengeluaranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditYskPenerimaanPengeluaran extends EditRecord
{
    protected static string $resource = YskPenerimaanPengeluaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
