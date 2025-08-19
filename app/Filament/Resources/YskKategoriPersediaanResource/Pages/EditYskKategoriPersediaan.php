<?php

namespace App\Filament\Resources\YskKategoriPersediaanResource\Pages;

use App\Filament\Resources\YskKategoriPersediaanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditYskKategoriPersediaan extends EditRecord
{
    protected static string $resource = YskKategoriPersediaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
