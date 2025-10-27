<?php

namespace App\Filament\Admin\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informazioni generali')
                    ->columnSpanFull()
                    ->columns()
                    ->schema([
                        TextInput::make('name')
                            ->label('Nome')
                            ->required(),
                        TextInput::make('last_name')
                            ->required()
                            ->label('Cognome'),
                        Select::make('comune_id')
                            ->required()
                            ->label('Comune')
                            ->relationship('comune', 'name'),
                    ]),
                Section::make('Info di contatto')
                    ->columnSpanFull()
                    ->columns()
                    ->schema([
                        TextInput::make('phone')
                            ->label('Telefono')
                            ->tel(),
                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->required(),
                        TextInput::make('telegram'),
                        TextInput::make('linkedin'),
                        TextInput::make('twitter'),
                    ]),
            ]);
    }
}
