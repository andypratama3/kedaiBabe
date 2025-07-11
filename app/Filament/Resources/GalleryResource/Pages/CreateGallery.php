<?php

namespace App\Filament\Resources\GalleryResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\GalleryResource;
use App\Filament\BaseButton\BaseCreateRecord;

class CreateGallery extends BaseCreateRecord
{
    protected static string $resource = GalleryResource::class;
}
