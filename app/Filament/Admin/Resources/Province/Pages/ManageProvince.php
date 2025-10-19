<?php

namespace App\Filament\Admin\Resources\Province\Pages;

use App\Filament\Admin\Resources\Province\ProvinciaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageProvince extends ManageRecords
{
    protected static string $resource = ProvinciaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
