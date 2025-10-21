<?php

namespace App\Filament\Admin\Resources\Conferences;

use App\Filament\Admin\Resources\Conferences\Pages\CreateConference;
use App\Filament\Admin\Resources\Conferences\Pages\EditConference;
use App\Filament\Admin\Resources\Conferences\Pages\ListConferences;
use App\Filament\Admin\Resources\Conferences\Pages\ViewConference;
use App\Filament\Admin\Resources\Conferences\Schemas\ConferenceForm;
use App\Filament\Admin\Resources\Conferences\Schemas\ConferenceInfolist;
use App\Filament\Admin\Resources\Conferences\Tables\ConferencesTable;
use App\Models\Conference;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ConferenceResource extends Resource
{
    protected static ?string $model = Conference::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ConferenceForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ConferenceInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ConferencesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListConferences::route('/'),
            'create' => CreateConference::route('/create'),
            'view' => ViewConference::route('/{record}'),
            'edit' => EditConference::route('/{record}/edit'),
        ];
    }
}
