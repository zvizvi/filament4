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
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image()
                    ->required(),
                TextInput::make('url')
                    ->required(),
                TextInput::make('author')
                    ->required(),
                TextInput::make('category')
                    ->required(),
                TextInput::make('language')
                    ->required(),
                RichEditor::make('content')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('feed_url')
                    ->required(),
            ]);
    }
}
