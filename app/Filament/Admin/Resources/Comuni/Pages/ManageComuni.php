<?php

namespace App\Filament\Admin\Resources\Comuni\Pages;

use App\Filament\Admin\Resources\Comuni\ComuneResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageComuni extends ManageRecords
{
    protected static string $resource = ComuneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
