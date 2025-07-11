<?php

namespace App\Filament\BaseButton;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class BaseEditRecord extends EditRecord
{
    /**
     * Tombol aksi khusus halaman Edit.
     */
    protected function getFormActions(): array
    {
        return [
            // Tombol Batal
            Actions\Action::make('cancel')
                ->label('Batal')
                ->url($this->getResource()::getUrl())
                ->color('primary')
                ->icon('heroicon-m-x-mark'),

            // Tombol Update
            Actions\Action::make('save')
                ->label('Update')
                ->submit('edit-form')
                ->color('success')
                ->icon('heroicon-m-check')
                ->action(function () {
                    $this->save(); // simpan data
                    $this->notify('success', 'Data berhasil diperbarui.');
                }),
        ];
    }

    /**
     * Redirect ke index setelah update.
     */
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
