<?php

namespace App\Filament\Resources\YskPenerimaanPengeluaranResource\Pages;

use App\Filament\Resources\YskPenerimaanPengeluaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListYskPenerimaanPengeluarans extends ListRecords
{
    protected static string $resource = YskPenerimaanPengeluaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Tambah Penerimaan Pengeluaran')
            ->icon('heroicon-s-plus'),
        ];
    }
}
