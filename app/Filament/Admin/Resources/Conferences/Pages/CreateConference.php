<?php

namespace App\Filament\Admin\Resources\Conferences\Pages;

use App\Filament\Admin\Resources\Conferences\ConferenceResource;
use Filament\Resources\Pages\CreateRecord;

class CreateConference extends CreateRecord
{
    protected static string $resource = ConferenceResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        return $data;
    }
}
