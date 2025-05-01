<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KibEResource\Pages;
use App\Filament\Resources\KibEResource\RelationManagers;
use App\Models\KibE;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KibEResource extends Resource
{
    protected static ?string $model = KibE::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Manage Kib';
    protected static ?string $navigationLabel = 'Data KIB - E';
    protected static ?string $pluralLabel = 'Data Kartu Inventaris Barang (KIB) E - Aset Tetap lainnya';

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
                Forms\Components\TextInput::make('judul_pencipta')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('spesifikasi')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('asal_daerah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('pencipta')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('bahan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jenis')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ukuran')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jumlah')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('tahun_cetak_pembelian')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('asal_usul')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('harga')
                    ->required()
                    ->numeric(),
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
                Tables\Columns\TextColumn::make('judul_pencipta')
                    ->searchable(),
                Tables\Columns\TextColumn::make('asal_daerah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pencipta')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bahan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ukuran')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tahun_cetak_pembelian')
                    ->searchable(),
                Tables\Columns\TextColumn::make('asal_usul')
                    ->searchable(),
                Tables\Columns\TextColumn::make('harga')
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
            'index' => Pages\ListKibES::route('/'),
            'create' => Pages\CreateKibE::route('/create'),
            'edit' => Pages\EditKibE::route('/{record}/edit'),
        ];
    }
}
