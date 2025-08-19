<?php

namespace App\Filament\Resources;

use App\Filament\Resources\YskDataCabangResource\Pages;
use App\Filament\Resources\YskDataCabangResource\RelationManagers;
use App\Models\YskDataCabang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class YskDataCabangResource extends Resource
{
    protected static ?string $model = YskDataCabang::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';
    protected static ?string $navigationGroup = "Setup";
    protected static ?int $navigationSort = 4;
    protected static ?string $navigationLabel = 'Data Cabang';
    protected static ?string $modelLabel = 'Data Cabang';
    protected static ?string $pluralModelLabel = 'Data Cabang';
    protected static ?string $slug = 'data-cabang';
    protected static bool $canCreateAnother = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nomor_cabang')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_cabang')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('alamat')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nomor_cabang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_cabang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status'),
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
            'index' => Pages\ListYskDataCabangs::route('/'),
            'create' => Pages\CreateYskDataCabang::route('/create'),
            'edit' => Pages\EditYskDataCabang::route('/{record}/edit'),
        ];
    }
}
