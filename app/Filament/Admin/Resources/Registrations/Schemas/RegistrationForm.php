<?php

namespace App\Filament\Admin\Resources\Registrations\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class RegistrationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                Select::make('conference_id')
                    ->relationship('conference', 'name')
                    ->required(),
                Textarea::make('public_message')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
