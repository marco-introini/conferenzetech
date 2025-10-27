<?php

namespace App\Filament\Admin\Resources\Conferences\Tables;

use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ConferencesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nome conferenza')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('user.name')
                    ->label('Inserita da')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('comune.name')
                    ->label('Comune')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Data creazione')
                    ->dateTime('d/m/Y H:i:s')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('Data ultima modifica')
                    ->dateTime('d/m/Y H:i:s')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
            ]);
    }
}
