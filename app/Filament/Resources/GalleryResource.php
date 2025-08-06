<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Data Gambar';

    protected static ?string $navigationLabel = 'Gallery Foto';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nama')
                    ->maxLength(45)
                    ->default(null)
                    ->rules(['required', 'max:45'])
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image')
                    ->label('Foto')
                    ->multiple()
                    ->image()
                    ->reorderable()
                    ->directory('gallery')
                    ->disk('public')
                    ->visibility('public')
                    ->maxFiles(10)
                    ->maxSize(10240)
                    ->columnSpanFull()
                    ->enableDownload()
                    ->enableOpen(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                ImageColumn::make('image')
                    ->circular()
                    ->stacked()
                    ->limit(3)
                    ->limitedRemainingText(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->requiresConfirmation()
                    ->modalHeading('Hapus Gallery')
                    ->modalSubheading('Apakah Anda yakin ingin menghapus gallery ini?'),
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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
