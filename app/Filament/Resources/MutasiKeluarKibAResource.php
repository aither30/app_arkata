<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MutasiKeluarKibAResource\Pages;
use App\Filament\Resources\MutasiKeluarKibAResource\RelationManagers;
use App\Models\MutasiKeluarKibA;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MutasiKeluarKibAResource extends Resource
{
    protected static ?string $model = MutasiKeluarKibA::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Data Mutasi Keluar';
    protected static ?string $pluralLabel = 'Data Mutasi Keluar KIB A - Tanah';
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
                    ->maxLength(255)
                    ->default('Tanah'),
                Forms\Components\TextInput::make('nama_barang')
                    ->maxLength(255),
                Forms\Components\TextInput::make('merk_type')
                    ->maxLength(255),
                Forms\Components\TextInput::make('no_sertifikat')
                    ->maxLength(255),
                Forms\Components\TextInput::make('asal_perolehan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('bahan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('tahun_beli'),
                Forms\Components\TextInput::make('ukuran_konstruksi')
                    ->maxLength(255),
                Forms\Components\TextInput::make('satuan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('kondisi')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jumlah_barang_awal')
                    ->numeric(),
                Forms\Components\TextInput::make('harga_awal')
                    ->numeric(),
                Forms\Components\TextInput::make('mutasi_berkurang_jumlah')
                    ->numeric(),
                Forms\Components\TextInput::make('mutasi_berkurang_harga')
                    ->numeric(),
                Forms\Components\TextInput::make('mutasi_bertambah_jumlah')
                    ->numeric(),
                Forms\Components\TextInput::make('mutasi_bertambah_harga')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_barang_akhir')
                    ->numeric(),
                Forms\Components\TextInput::make('harga_akhir')
                    ->numeric(),
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
                Tables\Columns\TextColumn::make('nama_barang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('merk_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_sertifikat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('asal_perolehan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bahan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tahun_beli'),
                Tables\Columns\TextColumn::make('ukuran_konstruksi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('satuan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kondisi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_barang_awal')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('harga_awal')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('mutasi_berkurang_jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('mutasi_berkurang_harga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('mutasi_bertambah_jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('mutasi_bertambah_harga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_barang_akhir')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('harga_akhir')
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
            'index' => Pages\ListMutasiKeluarKibAS::route('/'),
            'create' => Pages\CreateMutasiKeluarKibA::route('/create'),
            'edit' => Pages\EditMutasiKeluarKibA::route('/{record}/edit'),
        ];
    }
}
