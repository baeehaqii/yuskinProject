<?php

namespace App\Filament\Resources\YskDataUsahaResource\Pages;

use App\Filament\Resources\YskDataUsahaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListYskDataUsahas extends ListRecords
{
    protected static string $resource = YskDataUsahaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Tambah Data Usaha')
            ->icon('heroicon-s-plus'),
        ];
    }
}
