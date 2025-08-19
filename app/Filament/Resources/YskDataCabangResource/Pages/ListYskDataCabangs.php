<?php

namespace App\Filament\Resources\YskDataCabangResource\Pages;

use App\Filament\Resources\YskDataCabangResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListYskDataCabangs extends ListRecords
{
    protected static string $resource = YskDataCabangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Tambah Data Cabang')
            ->icon('heroicon-s-plus'),
        ];
    }
}
