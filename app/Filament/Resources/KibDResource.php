<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KibDResource\Pages;
use App\Filament\Resources\KibDResource\RelationManagers;
use App\Models\KibD;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KibDResource extends Resource
{
    protected static ?string $model = KibD::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Manage Kib';
    protected static ?string $navigationLabel = 'Data KIB - D';
    protected static ?string $pluralLabel = 'Data Kartu Inventaris Barang (KIB) D - jalan, Irigasi, dan jaringan';

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
                Forms\Components\TextInput::make('konstruksi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('panjang')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('lebar')
                    ->required()
                    ->numeric(),
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
                Forms\Components\TextInput::make('status_tanah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nomor_kode_tanah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('asal_usul')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kondisi')
                    ->required(),
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
                Tables\Columns\TextColumn::make('kode_barang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nomor_register')
                    ->searchable(),
                Tables\Columns\TextColumn::make('konstruksi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('panjang')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lebar')
                    ->numeric()
                    ->sortable(),
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
                Tables\Columns\TextColumn::make('status_tanah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nomor_kode_tanah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('asal_usul')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kondisi'),
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
            'index' => Pages\ListKibDS::route('/'),
            'create' => Pages\CreateKibD::route('/create'),
            'edit' => Pages\EditKibD::route('/{record}/edit'),
        ];
    }
}
