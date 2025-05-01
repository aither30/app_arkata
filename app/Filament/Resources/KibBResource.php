<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KibBResource\Pages;
use App\Filament\Resources\KibBResource\RelationManagers;
use App\Models\KibB;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KibBResource extends Resource
{
    protected static ?string $model = KibB::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Manage Kib';

    protected static ?string $navigationLabel = 'Data KIB - B';
    protected static ?string $pluralLabel = 'Data Kartu Inventaris Barang (KIB) B - Peralatan dan Mesin';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_barang')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_barang')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nomor_register')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('merk')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ukuran')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('bahan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tahun_pembelian')
                    ->required(),
                Forms\Components\TextInput::make('pabrik')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('rangka')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('mesin')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('polisi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('bpkb')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('asal')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('harga')
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
                Tables\Columns\TextColumn::make('kode_barang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_barang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nomor_register')
                    ->searchable(),
                Tables\Columns\TextColumn::make('merk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ukuran')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bahan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tahun_pembelian'),
                Tables\Columns\TextColumn::make('pabrik')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rangka')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mesin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('polisi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bpkb')
                    ->searchable(),
                Tables\Columns\TextColumn::make('asal')
                    ->searchable(),
                Tables\Columns\TextColumn::make('harga')
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
            'index' => Pages\ListKibBS::route('/'),
            'create' => Pages\CreateKibB::route('/create'),
            'edit' => Pages\EditKibB::route('/{record}/edit'),
        ];
    }
}
