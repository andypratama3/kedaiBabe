<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\BaseButton\BaseEditRecord;
use App\Filament\Resources\CategoryResource;
use Filament\Actions;

class EditCategory extends BaseEditRecord
{
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
