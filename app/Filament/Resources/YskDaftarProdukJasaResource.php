<?php

namespace App\Filament\Resources;

use App\Filament\Resources\YskDaftarProdukJasaResource\Pages;
use App\Filament\Resources\YskDaftarProdukJasaResource\RelationManagers;
use App\Models\YskDaftarProdukJasa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class YskDaftarProdukJasaResource extends Resource
{
    protected static ?string $model = YskDaftarProdukJasa::class;

    protected static ?string $navigationIcon = 'heroicon-o-wallet';
    protected static ?string $navigationGroup = "Setup";
    protected static ?int $navigationSort = 5;
    protected static ?string $navigationLabel = 'Daftar Produk Jasa';
    protected static ?string $modelLabel = 'Daftar Produk Jasa';
    protected static ?string $pluralModelLabel = 'Daftar Produk Jasa';
    protected static ?string $slug = 'daftar-produk-jasa';
    protected static bool $canCreateAnother = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nomor_produk')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_produk')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('gol_harga_1')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('gol_harga_2')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('gol_harga_3')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('gol_harga_4')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('gol_harga_5')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('keterangan')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nomor_produk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_produk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gol_harga_1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gol_harga_2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gol_harga_3')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gol_harga_4')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gol_harga_5')
                    ->searchable(),
                Tables\Columns\TextColumn::make('keterangan')
                    ->searchable(),
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
            'index' => Pages\ListYskDaftarProdukJasas::route('/'),
            'create' => Pages\CreateYskDaftarProdukJasa::route('/create'),
            'edit' => Pages\EditYskDaftarProdukJasa::route('/{record}/edit'),
        ];
    }
}
