<?php

namespace App\Filament\Resources\YskDaftarAsetTetapResource\Pages;

use App\Filament\Resources\YskDaftarAsetTetapResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListYskDaftarAsetTetaps extends ListRecords
{
    protected static string $resource = YskDaftarAsetTetapResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Tambah Aset Tetap')
            ->icon('heroicon-s-plus'),
        ];
    }
}
