<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Support\RawJs;
use App\Models\PackageService;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;

use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PackageServiceResource\Pages;
use App\Filament\Resources\PackageServiceResource\RelationManagers;

class PackageServiceResource extends Resource
{
    protected static ?string $model = PackageService::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Data Master';

    protected static ?string $navigationLabel = 'Paket Layanan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nama Produk')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, callable $set) =>
                        $set('slug', \Str::slug($state))
                ),
                
                Forms\Components\TextInput::make('price')
                ->label('Harga')
                ->required()
                ->mask(RawJs::make('$money($input)'))
                ->stripCharacters(',')
                ->numeric(),

                Forms\Components\FileUpload::make('image')
                  ->label('Gambar')
                    ->required()
                    ->disk('public')
                    ->directory('package_service/')
                    ->visibility('public')
                    ->image()
                    ->imagePreviewHeight('150')
                    ->preserveFilenames(false)
                    ->columnSpanFull(),

                Forms\Components\Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),


            Repeater::make('products')
                ->label('List Produk Paket')
                ->schema([
                    Grid::make(2)
                        ->schema([
                            Select::make('product_id')
                                ->label('Produk')
                                ->options(\App\Models\Product::all()->pluck('name', 'id'))
                                ->searchable()
                                ->required(),

                            TextInput::make('quantity')
                                ->label('Jumlah')
                                ->numeric()
                                ->default(1)
                                ->required(),
                        ]),
                ])
                ->defaultItems(1)
                ->createItemButtonLabel('Tambah Produk')
                ->deletable(true)
                ->reorderable(false)
                ->columns(1)
                ->columnSpanFull()
                ->itemLabel(fn ($state): ?string => null) // Hilangkan judul "Item 1"
                ->collapsed(false),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->label('Harga')
                    ->formatStateUsing(fn (string $state): string => 'Rp. ' . number_format($state, 0, ',', '.'))
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
                Tables\Actions\DeleteAction::make()
                    ->requiresConfirmation()
                    ->color('danger')
                    ->modalHeading('Hapus Paket Layanan')
                    ->modalButton('Hapus'),
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
            'index' => Pages\ListPackageServices::route('/'),
            'create' => Pages\CreatePackageService::route('/create'),
            'edit' => Pages\EditPackageService::route('/{record}/edit'),
        ];
    }
}
