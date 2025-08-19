<?php

namespace App\Filament\Resources;

use App\Filament\Resources\YskDataAkunResource\Pages;
use App\Filament\Resources\YskDataAkunResource\RelationManagers;
use App\Models\YskDataAkun;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class YskDataAkunResource extends Resource
{
    protected static ?string $model = YskDataAkun::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = "Setup";
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationLabel = 'Data Akun';
    protected static ?string $modelLabel = 'Data Akun';
    protected static ?string $pluralModelLabel = 'Data Akun';
    protected static ?string $slug = 'data-akun';
    protected static bool $canCreateAnother = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('akun')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_akun')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('keterangan')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('akun')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_akun')
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
            'index' => Pages\ListYskDataAkuns::route('/'),
            'create' => Pages\CreateYskDataAkun::route('/create'),
            'edit' => Pages\EditYskDataAkun::route('/{record}/edit'),
        ];
    }
}
