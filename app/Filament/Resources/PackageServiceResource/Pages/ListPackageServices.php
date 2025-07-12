<?php

namespace App\Filament\Resources\PackageServiceResource\Pages;

use App\Filament\Resources\PackageServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPackageServices extends ListRecords
{
    protected static string $resource = PackageServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
