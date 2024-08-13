<?php

namespace App\Filament\Resources\HighlightCategoryResource\Pages;

use App\Filament\Resources\HighlightCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHighlightCategory extends EditRecord
{
    protected static string $resource = HighlightCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}