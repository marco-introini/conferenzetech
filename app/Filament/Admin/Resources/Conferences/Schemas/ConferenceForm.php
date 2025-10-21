<?php

namespace App\Filament\Admin\Resources\Conferences\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ConferenceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nome conferenza')
                    ->columnSpanFull()
                    ->required(),
                Section::make('Informazioni sul luogo')
                    ->columnSpanFull()
                    ->columns()
                    ->schema([
                        TextInput::make('location')
                            ->label('Luogo')
                            ->required(),
                        Select::make('comune_id')
                            ->label('Comune')
                            ->relationship('comune', 'name')
                            ->required(),
                    ]),
                RichEditor::make('description')
                    ->label('Descrizione')
                    ->required()
                    ->fileAttachmentsDisk('conferences')
                    ->fileAttachmentsDirectory('description_images')
                    ->fileAttachmentsVisibility('public')
                    ->columnSpanFull(),
                Section::make('Date Conferenza')
                    ->schema([
                        DateTimePicker::make('start_date')
                            ->label('Data inizio')
                            ->seconds(false)
                            ->required(),
                        DateTimePicker::make('end_date')
                            ->label('Data fine')
                            ->seconds(false)
                            ->required(),
                    ]),
                FileUpload::make('cover_image')
                    ->label('Immagine di copertina')
                    ->image()
                    ->imageEditor()
                    ->disk('conferences'),
                TextInput::make('url')
                    ->label('Sito Internet della conferenza')
                    ->url(),
            ]);
    }
}
