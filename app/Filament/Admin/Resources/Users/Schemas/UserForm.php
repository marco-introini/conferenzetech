<?php

namespace App\Filament\Admin\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nome')
                    ->required(),
                TextInput::make('last_name')
                    ->label('Cognome'),
                Select::make('comune_id')
                    ->label('Comune')
                    ->relationship('comune', 'name'),
                TextInput::make('phone')
                    ->label('Telefono')
                    ->tel(),
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required(),
                DateTimePicker::make('email_verified_at')
                    ->label('Data verifica email'),
                DateTimePicker::make('two_factor_confirmed_at')
                    ->label('Data verifica 2FA'),
            ]);
    }
}
