<?php

namespace App\Filament\Resources\ProductResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ProductResource;
use App\Filament\BaseButton\BaseCreateRecord;

class CreateProduct extends BaseCreateRecord
{
    protected static string $resource = ProductResource::class;

}
