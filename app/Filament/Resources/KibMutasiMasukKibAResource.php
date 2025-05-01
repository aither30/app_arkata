<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KibMutasiMasukKibAResource\Pages;
use App\Filament\Resources\KibMutasiMasukKibAResource\RelationManagers;
use App\Models\KibMutasiMasukKibA;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KibMutasiMasukKibAResource extends Resource
{
    protected static ?string $model = KibMutasiMasukKibA::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Data Mutasi Masuk KIB A';
    protected static ?string $pluralLabel = 'Data Mutasi Masuk KIB A - Tanah';
    protected static ?string $navigationGroup = 'Manage Mutasi';
    

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('jenis_barang')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal_surat_pesanan'),
                Forms\Components\TextInput::make('nomor_surat_pesanan')
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal_dpa_spm'),
                Forms\Components\TextInput::make('nomor_dpa_spm')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jumlah_barang')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('harga_satuan')
                    ->required()
                    ->numeric()
                    ->default(0.00),
                Forms\Components\TextInput::make('jumlah_harga')
                    ->required()
                    ->numeric()
                    ->default(0.00),
                Forms\Components\TextInput::make('dipergunakan_untuk')
                    ->maxLength(255),
                Forms\Components\Textarea::make('keterangan')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('jenis_barang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_surat_pesanan')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nomor_surat_pesanan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_dpa_spm')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nomor_dpa_spm')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_barang')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('harga_satuan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_harga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dipergunakan_untuk')
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
            'index' => Pages\ListKibMutasiMasukKibAS::route('/'),
            'create' => Pages\CreateKibMutasiMasukKibA::route('/create'),
            'edit' => Pages\EditKibMutasiMasukKibA::route('/{record}/edit'),
        ];
    }
}
