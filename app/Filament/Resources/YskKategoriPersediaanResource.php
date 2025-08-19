<?php

namespace App\Filament\Resources;

use App\Filament\Resources\YskKategoriPersediaanResource\Pages;
use App\Filament\Resources\YskKategoriPersediaanResource\RelationManagers;
use App\Models\YskKategoriPersediaan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class YskKategoriPersediaanResource extends Resource
{
    protected static ?string $model = YskKategoriPersediaan::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox-stack';
    protected static ?string $navigationGroup = "Setup";
    protected static ?int $navigationSort = 7;
    protected static ?string $navigationLabel = 'Kategori Persedian';
    protected static ?string $modelLabel = 'Kategori Persedian';
    protected static ?string $pluralModelLabel = 'Kategori Persedian';
    protected static ?string $slug = 'kategori-persediaan';
    protected static bool $canCreateAnother = false;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kategori_hpp')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kategori_produk')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kategori_hpp')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kategori_produk')
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
            'index' => Pages\ListYskKategoriPersediaans::route('/'),
            'create' => Pages\CreateYskKategoriPersediaan::route('/create'),
            'edit' => Pages\EditYskKategoriPersediaan::route('/{record}/edit'),
        ];
    }
}
