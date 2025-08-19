<?php

namespace App\Filament\Resources\YskDaftarProdukDagangResource\Pages;

use App\Filament\Resources\YskDaftarProdukDagangResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListYskDaftarProdukDagangs extends ListRecords
{
    protected static string $resource = YskDaftarProdukDagangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Tambah Produk Dagang')
            ->icon('heroicon-s-plus'),
        ];
    }
}
