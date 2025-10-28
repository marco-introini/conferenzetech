<?php

namespace App\Filament\Admin\Resources\Users\RelationManagers;

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
                TextColumn::make('conference.name')
                    ->label('Conferenza')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Data registrazione')
                    ->dateTime('d/m/Y H:i:s')
                    ->sortable(),
            ])
            ->headerActions([
                CreateAction::make(),
            ]);
    }
}
