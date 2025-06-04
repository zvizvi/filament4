<?php

namespace App\Filament\Admin\Resources\Podcasts\Resources\Episodes\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EpisodeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('number')
                    ->required()
                    ->numeric(),
                TextInput::make('audio_url'),
                TextInput::make('audio_file'),
                RichEditor::make('content')
                    ->columnSpanFull(),
                DateTimePicker::make('published_at')
                    ->required()
                    ->default(now()),
            ]);
    }
}
