<?php

namespace App\Filament\Admin\Resources\Registrations\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class RegistrationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->label('Partecipante')
                    ->relationship('participant', 'name')
                    ->required(),
                Select::make('conference_id')
                    ->label('Conferenza')
                    ->relationship('conference', 'name')
                    ->required(),
                Textarea::make('public_message')
                    ->label('Messaggio pubblico')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
