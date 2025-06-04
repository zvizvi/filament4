<?php

namespace App\Filament\Admin\Resources\Podcasts\Resources\Episodes\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class EpisodeInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('number')
                    ->numeric(),
                TextEntry::make('audio_url'),
                TextEntry::make('audio_file'),
                TextEntry::make('content')
                    ->html()
                    ->columnSpanFull(),
                TextEntry::make('published_at')
                    ->dateTime(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
