<?php

namespace App\Filament\Resources\HighlightCategoryResource\Pages;

use App\Filament\Resources\HighlightCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHighlightCategory extends CreateRecord
{
    protected static string $resource = HighlightCategoryResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}