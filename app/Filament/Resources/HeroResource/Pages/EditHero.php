<?php

namespace App\Filament\Resources\HeroResource\Pages;

use Filament\Actions;
use App\Filament\Resources\HeroResource;
use Filament\Resources\Pages\EditRecord;
use App\Filament\BaseButton\BaseEditRecord;

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
