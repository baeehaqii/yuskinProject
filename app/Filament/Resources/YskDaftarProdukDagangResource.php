<?php

namespace App\Filament\Resources;

use App\Filament\Resources\YskDaftarProdukDagangResource\Pages;
use App\Filament\Resources\YskDaftarProdukDagangResource\RelationManagers;
use App\Models\YskDaftarProdukDagang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class YskDaftarProdukDagangResource extends Resource
{
    protected static ?string $model = YskDaftarProdukDagang::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';
    protected static ?string $navigationGroup = "Setup";
    protected static ?int $navigationSort = 6;
    protected static ?string $navigationLabel = 'Daftar Produk Dagang';
    protected static ?string $modelLabel = 'Daftar Produk Dagang';
    protected static ?string $pluralModelLabel = 'Daftar Produk Dagang';
    protected static ?string $slug = 'daftar-produk-dagang';
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
                Forms\Components\TextInput::make('kategori_produk')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('unit')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jumlah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('harga_perunit')
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
                Tables\Columns\TextColumn::make('kategori_produk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('unit')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('harga_perunit')
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
            'index' => Pages\ListYskDaftarProdukDagangs::route('/'),
            'create' => Pages\CreateYskDaftarProdukDagang::route('/create'),
            'edit' => Pages\EditYskDaftarProdukDagang::route('/{record}/edit'),
        ];
    }
}
