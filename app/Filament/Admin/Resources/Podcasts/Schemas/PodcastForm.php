<?php

namespace App\Filament\Admin\Resources\Podcasts\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PodcastForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image(),
                TextInput::make('url'),
                TextInput::make('author'),
                TextInput::make('category'),
                TextInput::make('language'),
                RichEditor::make('content')
                    ->columnSpanFull(),
                TextInput::make('feed_url'),
            ]);
    }
}
