<?php

namespace App\Filament\Admin\Resources\Conferences\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ConferenceInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('user.name')
                    ->label('Inserita da'),
                TextEntry::make('name')
                    ->label('Nome conferenza'),
                Section::make('Informazioni sul luogo')
                    ->columnSpanFull()
                    ->columns()
                    ->schema([
                        TextEntry::make('location')
                            ->label('Luogo'),
                        TextEntry::make('comune.name')
                            ->label('Comune'),
                    ]),
                TextEntry::make('description')
                    ->columnSpanFull(),
                Section::make('Date Conferenza')
                    ->schema([
                        TextEntry::make('start_date')
                            ->dateTime('d/m/Y H:i')
                            ->label('Data inizio'),
                        TextEntry::make('end_date')
                            ->dateTime('d/m/Y H:i')
                            ->label('Data fine'),
                    ]),
                ImageEntry::make('cover_image'),
                TextEntry::make('url'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
