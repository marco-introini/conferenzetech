<?php

namespace App\Filament\Admin\Resources\Province;

use App\Filament\Admin\Resources\Province\Pages\ManageProvince;
use App\Models\Provincia;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProvinciaResource extends Resource
{
    protected static ?string $model = Provincia::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationLabel = 'Province';
    protected static ?string $label = 'Provincia';
    protected static ?string $pluralLabel = 'Province';
    protected static ?string $slug = 'province';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nome')
                    ->required(),
                TextInput::make('short_name')
                    ->label('Sigla')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nome')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('short_name')
                    ->label('Sigla')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Data creazione')
                    ->dateTime('d/m/Y H:m:s')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageProvince::route('/'),
        ];
    }
}
