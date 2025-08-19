<?php

namespace App\Filament\Resources;

use App\Filament\Resources\YskPenerimaanPengeluaranResource\Pages;
use App\Filament\Resources\YskPenerimaanPengeluaranResource\RelationManagers;
use App\Models\YskPenerimaanPengeluaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class YskPenerimaanPengeluaranResource extends Resource
{
    protected static ?string $model = YskPenerimaanPengeluaran::class;

    protected static ?string $navigationIcon = 'heroicon-s-newspaper';
    protected static ?string $navigationGroup = "Transaksi";
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationLabel = 'Penerimaan Pengeluaran Lain Lain';
    protected static ?string $modelLabel = 'Penerimaan Pengeluaran Lain Lain';
    protected static ?string $pluralModelLabel = 'Penerimaan Pengeluaran Lain Lain';
    protected static ?string $slug = 'penerimaan-pengeluaran';
    protected static bool $canCreateAnother = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('tanggal')
                    ->required(),
                Forms\Components\TextInput::make('no_kuitansi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('terima_dari')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('uraian')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('pengeluaran')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('penerimaan')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('rekening')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kategori_lk')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('keterangan')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tanggal')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('no_kuitansi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('terima_dari')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pengeluaran')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('penerimaan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('rekening')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kategori_lk')
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
            'index' => Pages\ListYskPenerimaanPengeluarans::route('/'),
            'create' => Pages\CreateYskPenerimaanPengeluaran::route('/create'),
            'edit' => Pages\EditYskPenerimaanPengeluaran::route('/{record}/edit'),
        ];
    }
}
