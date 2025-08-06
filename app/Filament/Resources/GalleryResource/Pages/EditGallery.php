<?php

namespace App\Filament\Resources\GalleryResource\Pages;

use App\Filament\BaseButton\BaseEditRecord;
use App\Filament\Resources\GalleryResource;
use Filament\Actions;

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
