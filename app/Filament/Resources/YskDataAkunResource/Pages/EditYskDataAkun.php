<?php

namespace App\Filament\Resources\YskDataAkunResource\Pages;

use App\Filament\Resources\YskDataAkunResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditYskDataAkun extends EditRecord
{
    protected static string $resource = YskDataAkunResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
