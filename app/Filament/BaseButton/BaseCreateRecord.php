<?php

namespace App\Filament\BaseButton;

use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class BaseCreateRecord extends CreateRecord
{
    /**
     * Tombol aksi yang akan digunakan oleh semua halaman Create.
     */
    protected function getFormActions(): array
    {
        return [
            Actions\Action::make('cancel')
                ->label('Batal')
                ->url($this->getResource()::getUrl())
                ->color('primary')
                ->icon('heroicon-m-x-mark'),

            Actions\Action::make('save')
                ->label('Simpan')
                ->submit('create-form') // ini penting!
                ->color('success')
                ->icon('heroicon-m-check-circle')
                ->action(function () {
                    $this->create(); // method bawaan dari CreateRecord
                    $this->notify('success', 'Data berhasil disimpan.');
                }),
        ];
    }

    /**
     * Redirect otomatis ke halaman index setelah data disimpan.
     */
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
