<?php

namespace App\Filament\Resources\PackageServiceResource\Pages;

use App\Filament\BaseButton\BaseCreateRecord;
use App\Filament\Resources\PackageServiceResource;

class CreatePackageService extends BaseCreateRecord
{
    protected static string $resource = PackageServiceResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Pisahkan data products
        $this->productsData = $data['products'] ?? [];

        unset($data['products']);

        return $data;
    }

    protected function afterCreate(): void
    {
        $record = $this->record;

        if (! empty($this->productsData)) {
            $pivotData = [];

            foreach ($this->productsData as $product) {
                if (! empty($product['product_id']) && isset($product['quantity'])) {
                    $pivotData[$product['product_id']] = ['quantity' => $product['quantity']];
                }
            }

            $record->products()->sync($pivotData);
        }
    }
}
