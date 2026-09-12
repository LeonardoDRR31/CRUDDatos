<?php

namespace App\Filament\Resources\Clients\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ClientsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nombres')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('apellido_paterno')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('apellido_materno')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('dni')
                    ->searchable(),
                TextColumn::make('correo')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}