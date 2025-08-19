<?php

namespace App\Filament\Resources\YskDataUsahaResource\Pages;

use App\Filament\Resources\YskDataUsahaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditYskDataUsaha extends EditRecord
{
    protected static string $resource = YskDataUsahaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
