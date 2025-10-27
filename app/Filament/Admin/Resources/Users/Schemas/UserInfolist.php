<?php

namespace App\Filament\Admin\Resources\Users\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class UserInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name')
                    ->label('Nome'),
                TextEntry::make('last_name')
                    ->label('Cognome'),
                TextEntry::make('comune.name')
                    ->label('Comune'),
                IconEntry::make('is_admin')
                    ->label('Admin')
                    ->boolean(),
                TextEntry::make('phone')
                    ->label('Telefono'),
                TextEntry::make('email')
                    ->label('Email'),
                TextEntry::make('email_verified_at')
                    ->label('Data verifica email')
                    ->dateTime('d/m/Y H:m:s'),
                TextEntry::make('two_factor_confirmed_at')
                    ->dateTime('d/m/Y H:m:s')
                    ->label('Data verifica 2FA'),
                TextEntry::make('created_at')
                    ->dateTime('d/m/Y H:m:s')
                    ->label('Data creazione'),
                TextEntry::make('updated_at')
                    ->dateTime('d/m/Y H:m:s')
                    ->label('Data ultima modifica'),
            ]);
    }
}
