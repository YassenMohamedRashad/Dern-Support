<?php

namespace App\Filament\Admin\Resources\ServicesCategoryResource\Pages;

use App\Filament\Admin\Resources\ServicesCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServicesCategories extends ListRecords
{
    protected static string $resource = ServicesCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
