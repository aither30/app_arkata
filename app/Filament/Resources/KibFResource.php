<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KibFResource\Pages;
use App\Filament\Resources\KibFResource\RelationManagers;
use App\Models\KibF;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KibFResource extends Resource
{
    protected static ?string $model = KibF::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Manage Kib';
    protected static ?string $navigationLabel = 'Data KIB - F';
    protected static ?string $pluralLabel = 'Data Kartu Inventaris Barang (KIB) - Kontruksi dalam Pengerjaan';

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
                Forms\Components\TextInput::make('konstruksi_bertingkat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('konstruksi_beton')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('luas')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('lokasi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal_dokumen')
                    ->required(),
                Forms\Components\TextInput::make('nomor_dokumen')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal_mulai')
                    ->required(),
                Forms\Components\TextInput::make('status_tanah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nomor_kode_tanah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('asal_usul')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nilai_kontrak')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('keterangan')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_barang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('konstruksi_bertingkat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('konstruksi_beton')
                    ->searchable(),
                Tables\Columns\TextColumn::make('luas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lokasi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_dokumen')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nomor_dokumen')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_mulai')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status_tanah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nomor_kode_tanah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('asal_usul')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nilai_kontrak')
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
            'index' => Pages\ListKibFS::route('/'),
            'create' => Pages\CreateKibF::route('/create'),
            'edit' => Pages\EditKibF::route('/{record}/edit'),
        ];
    }
}
