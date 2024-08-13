<?php

namespace App\Filament\Resources\HighlightCategoryResource\Pages;

use App\Filament\Resources\HighlightCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHighlightCategories extends ListRecords
{
    protected static string $resource = HighlightCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
