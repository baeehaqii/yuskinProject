<?php

namespace App\Filament\Resources\YskDaftarProdukJasaResource\Pages;

use App\Filament\Resources\YskDaftarProdukJasaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListYskDaftarProdukJasas extends ListRecords
{
    protected static string $resource = YskDaftarProdukJasaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Tambah Produk Jasa')
            ->icon('heroicon-s-plus'),
        ];
    }
}
