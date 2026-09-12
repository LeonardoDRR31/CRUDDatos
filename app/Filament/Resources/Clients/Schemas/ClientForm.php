<?php

namespace App\Filament\Resources\Clients\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ClientForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombres')
                    ->required()
                    ->maxLength(255),
                TextInput::make('apellido_paterno')
                    ->required()
                    ->maxLength(255),
                TextInput::make('apellido_materno')
                    ->required()
                    ->maxLength(255),
                TextInput::make('dni')
                    ->required()
                    ->length(8)
                    ->unique(ignoreRecord: true),
                TextInput::make('correo')
                    ->email()
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                TextInput::make('telefono')
                    ->tel()
                    ->maxLength(255),
            ]);
    }
}