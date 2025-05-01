<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use App\Models\KibA;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Filters\Filter;
use App\Filament\Exports\KibAExporter;
use Filament\Tables\Filters\Indicator;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use App\Filament\Exports\ProductExporter;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Actions\ExportAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\ExportBulkAction;
use App\Filament\Resources\KibAResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KibAResource\Pages\EditKibA;
use App\Filament\Resources\KibAResource\Pages\ListKibAS;
use App\Filament\Resources\KibAResource\Pages\CreateKibA;
use App\Filament\Resources\KibAResource\RelationManagers;
use Filament\Actions\Exports\Enums\ExportFormat;

class KibAResource extends Resource
{
    protected static ?string $model = KibA::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    protected static ?string $navigationGroup = 'Manage Kib';

    protected static ?string $navigationLabel = 'Data KIB - A';
    protected static ?string $pluralLabel = 'Data Kartu Inventaris Barang (KIB) A - Tanah';

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
                Forms\Components\TextInput::make('nomor_kode_barang')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nomor_register')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('luas_tanah')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('tahun_pengadaan')
                    ->required(),
                Forms\Components\TextInput::make('letak')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('hak')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal_serifikat')
                    ->required(),
                Forms\Components\TextInput::make('nomor_serifikat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('asal_usul')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('harga')
                    ->required()
                    ->numeric(),
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
                Tables\Columns\TextColumn::make('nomor_kode_barang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nomor_register')
                    ->searchable(),
                Tables\Columns\TextColumn::make('luas_tanah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tahun_pengadaan'),
                Tables\Columns\TextColumn::make('letak')
                    ->searchable(),
                Tables\Columns\TextColumn::make('hak')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_serifikat')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nomor_serifikat')
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
                Filter::make('created_at')
                    ->form([
                        DatePicker::make('month')
                            ->label('Select Month')
                            ->displayFormat('F Y')
                            ->required(), // Pastikan filter ini diwajibkan
                    ])
                    ->indicateUsing(function (array $data): array {
                        $indicators = [];

                        if ($data['month'] ?? null) {
                            $selectedMonth = Carbon::parse($data['month']);
                            $indicators[] = Indicator::make("Created in " . $selectedMonth->format('F Y'))
                                ->removeField('month');
                        }

                        return $indicators;
                    })
                    ->modifyQueryUsing(function ($query, $data) {
                        if ($data['month'] ?? null) {
                            $selectedMonth = Carbon::parse($data['month']);
                            // Filter berdasarkan bulan yang dipilih
                            $query->whereBetween('created_at', [
                                $selectedMonth->startOfMonth(),
                                $selectedMonth->endOfMonth(),
                            ]);
                        }

                        return $query;
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
            // ->headerActions([
            //     ExportAction::make()
            //         ->exporter(KibAExporter::class)
            //         ->formats([
            //             ExportFormat::Xlsx,
            //             ExportFormat::Csv,
            //         ])
            // ]);
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
            'index' => Pages\ListKibAS::route('/'),
            'create' => Pages\CreateKibA::route('/create'),
            'edit' => Pages\EditKibA::route('/{record}/edit'),
        ];
    }

    protected function getFilters(): array
    {
        return [];
    }
}
