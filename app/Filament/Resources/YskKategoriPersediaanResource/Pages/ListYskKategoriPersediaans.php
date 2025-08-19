<?php

namespace App\Filament\Resources\YskKategoriPersediaanResource\Pages;

use App\Filament\Resources\YskKategoriPersediaanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListYskKategoriPersediaans extends ListRecords
{
    protected static string $resource = YskKategoriPersediaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Tambah Kategori Persediaan')
            ->icon('heroicon-s-plus'),
        ];
    }
}
