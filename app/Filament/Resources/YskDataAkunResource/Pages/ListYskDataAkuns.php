<?php

namespace App\Filament\Resources\YskDataAkunResource\Pages;

use App\Filament\Resources\YskDataAkunResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListYskDataAkuns extends ListRecords
{
    protected static string $resource = YskDataAkunResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Tambah Data Akun')
            ->icon('heroicon-s-plus'),
        ];
    }
}
