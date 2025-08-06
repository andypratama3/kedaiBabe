<?php

namespace App\Filament\Resources\PackageServiceResource\Pages;

use App\Filament\BaseButton\BaseEditRecord;
use App\Filament\Resources\PackageServiceResource;
use Filament\Actions;

class EditPackageService extends BaseEditRecord
{
    protected static string $resource = PackageServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    // Ambil relasi pivot saat form dibuka
    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['products'] = $this->record->products->map(function ($product) {
            return [
                'product_id' => $product->id,
                'quantity' => $product->pivot->quantity,
            ];
        })->toArray();

        return $data;
    }

    // Simpan ulang relasi pivot setelah update
    protected function afterSave(): void
    {
        $record = $this->record;
        $products = $this->data['products'] ?? [];

        $syncData = [];

        foreach ($products as $product) {
            if (! empty($product['product_id']) && isset($product['quantity'])) {
                $syncData[$product['product_id']] = ['quantity' => $product['quantity']];
            }
        }

        $record->products()->sync($syncData);
    }
}
