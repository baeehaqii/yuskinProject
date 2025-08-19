<?php

namespace App\Filament\Resources\YskDaftarProdukJasaResource\Pages;

use App\Filament\Resources\YskDaftarProdukJasaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditYskDaftarProdukJasa extends EditRecord
{
    protected static string $resource = YskDaftarProdukJasaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
