<?php

namespace App\Filament\Resources;

use App\Filament\Resources\YskDaftarAsetTetapResource\Pages;
use App\Filament\Resources\YskDaftarAsetTetapResource\RelationManagers;
use App\Models\YskDaftarAsetTetap;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class YskDaftarAsetTetapResource extends Resource
{
    protected static ?string $model = YskDaftarAsetTetap::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static ?string $navigationGroup = "Setup";
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationLabel = 'Daftar Aset Tetap';
    protected static ?string $modelLabel = 'Daftar Aset Tetap';
    protected static ?string $pluralModelLabel = 'Daftar Aset Tetap';
    protected static ?string $slug = 'daftar-aset-tetap';
    protected static bool $canCreateAnother = false;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('no_aset')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('uraian')
                    ->columnSpanFull(),
                Forms\Components\DatePicker::make('tanggal_pembelian'),
                Forms\Components\TextInput::make('harga_pembelian')
                    ->required()
                    ->numeric()
                    ->default(0.00),
                Forms\Components\DatePicker::make('tanggal_penjualan'),
                Forms\Components\TextInput::make('harga_penjualan')
                    ->numeric(),
                Forms\Components\TextInput::make('kategori_aset')
                    ->maxLength(255),
                Forms\Components\TextInput::make('nilai_penyusutan_awal')
                    ->required()
                    ->numeric()
                    ->default(0.00),
                Forms\Components\TextInput::make('nilai_penyusutan_akhir')
                    ->numeric(),
                Forms\Components\TextInput::make('nilai_buku')
                    ->required()
                    ->numeric()
                    ->default(0.00),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('no_aset')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_pembelian')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('harga_pembelian')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_penjualan')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('harga_penjualan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kategori_aset')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nilai_penyusutan_awal')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai_penyusutan_akhir')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai_buku')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListYskDaftarAsetTetaps::route('/'),
            'create' => Pages\CreateYskDaftarAsetTetap::route('/create'),
            'edit' => Pages\EditYskDaftarAsetTetap::route('/{record}/edit'),
        ];
    }
}
