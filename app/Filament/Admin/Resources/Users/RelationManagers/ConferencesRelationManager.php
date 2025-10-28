<?php

namespace App\Filament\Admin\Resources\Users\RelationManagers;

use App\Filament\Admin\Resources\Conferences\ConferenceResource;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ConferencesRelationManager extends RelationManager
{
    protected static string $relationship = 'conferences';

    protected static ?string $relatedResource = ConferenceResource::class;

    protected static ?string $title = 'Conferenze inserite dall\'utente';

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nome conferenza')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('comune.name')
                    ->label('Comune')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Data creazione')
                    ->dateTime('d/m/Y H:i:s')
                    ->sortable(),
            ])
            ->headerActions([
            ]);
    }
}
