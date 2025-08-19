<?php

namespace App\Filament\Resources\YskDaftarProdukDagangResource\Pages;

use App\Filament\Resources\YskDaftarProdukDagangResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditYskDaftarProdukDagang extends EditRecord
{
    protected static string $resource = YskDaftarProdukDagangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
