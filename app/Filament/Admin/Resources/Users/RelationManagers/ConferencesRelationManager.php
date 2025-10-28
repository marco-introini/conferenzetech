<?php

namespace App\Filament\Admin\Resources\Users\RelationManagers;

use App\Filament\Admin\Resources\Conferences\ConferenceResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class ConferencesRelationManager extends RelationManager
{
    protected static string $relationship = 'conferences';

    protected static ?string $relatedResource = ConferenceResource::class;

    protected static ?string $title = 'Conferenze a cui ha partecipato';

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
            ]);
    }
}
