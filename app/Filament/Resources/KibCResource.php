<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KibCResource\Pages;
use App\Filament\Resources\KibCResource\RelationManagers;
use App\Models\KibC;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KibCResource extends Resource
{
    protected static ?string $model = KibC::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Manage Kib';
    protected static ?string $navigationLabel = 'Data KIB - C';
    protected static ?string $pluralLabel = 'Data Kartu Inventaris Barang (KIB) C - Gedung dan Bangunan';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_barang')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kode_barang')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nomor_register')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kondisi_bangunan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('bertingkat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('beton')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('luas_lantai')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('lokasi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal_dokumen_gedung')
                    ->required(),
                Forms\Components\TextInput::make('nomor_dokumen_gedung')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('luas')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('status_tanah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('harga')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nomor_kode_tanah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('asal')
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
                Tables\Columns\TextColumn::make('nama_barang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_barang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nomor_register')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kondisi_bangunan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bertingkat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('beton')
                    ->searchable(),
                Tables\Columns\TextColumn::make('luas_lantai')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lokasi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_dokumen_gedung')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nomor_dokumen_gedung')
                    ->searchable(),
                Tables\Columns\TextColumn::make('luas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status_tanah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('harga')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nomor_kode_tanah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('asal')
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
            'index' => Pages\ListKibCS::route('/'),
            'create' => Pages\CreateKibC::route('/create'),
            'edit' => Pages\EditKibC::route('/{record}/edit'),
        ];
    }
}
