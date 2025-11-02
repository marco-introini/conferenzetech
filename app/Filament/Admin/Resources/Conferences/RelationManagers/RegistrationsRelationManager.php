<?php

namespace App\Filament\Admin\Resources\Conferences\RelationManagers;

use App\Filament\Admin\Resources\Registrations\RegistrationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class RegistrationsRelationManager extends RelationManager
{
    protected static string $relationship = 'registrations';

    protected static ?string $relatedResource = RegistrationResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('participant.name')
                    ->label('Utente'),
                TextColumn::make('participant.email')
                    ->label('Email'),
                TextColumn::make('created_at')
                    ->label('Data Registrazione'),
            ])
            ->headerActions([
                CreateAction::make(),
            ]);
    }
}
