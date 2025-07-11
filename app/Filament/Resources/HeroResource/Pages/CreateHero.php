<?php

namespace App\Filament\Resources\HeroResource\Pages;

use Filament\Actions;
use App\Filament\Resources\HeroResource;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\BaseButton\BaseCreateRecord;

class CreateHero extends BaseCreateRecord
{
    protected static string $resource = HeroResource::class;
}
