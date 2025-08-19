<?php

namespace App\Filament\Resources\YskPembelianResource\Pages;

use App\Filament\Resources\YskPembelianResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListYskPembelians extends ListRecords
{
    protected static string $resource = YskPembelianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Tambah Pembelian')
            ->icon('heroicon-s-plus'),
        ];
    }
}
