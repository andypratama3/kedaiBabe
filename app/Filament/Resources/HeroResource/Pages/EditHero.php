<?php

namespace App\Filament\Resources\HeroResource\Pages;

use App\Filament\BaseButton\BaseEditRecord;
use App\Filament\Resources\HeroResource;
use Filament\Actions;

class EditHero extends BaseEditRecord
{
    protected static string $resource = HeroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
