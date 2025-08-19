<?php

namespace App\Filament\Resources\YskPenjualanResource\Pages;

use App\Filament\Resources\YskPenjualanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListYskPenjualans extends ListRecords
{
    protected static string $resource = YskPenjualanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Tambah Penjualan')
            ->icon('heroicon-s-plus'),
        ];
    }
}
