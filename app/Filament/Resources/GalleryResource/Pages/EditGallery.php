<?php

namespace App\Filament\Resources\GalleryResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\BaseButton\BaseEditRecord;
use App\Filament\Resources\GalleryResource;

class EditGallery extends BaseEditRecord
{
    protected static string $resource = GalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
