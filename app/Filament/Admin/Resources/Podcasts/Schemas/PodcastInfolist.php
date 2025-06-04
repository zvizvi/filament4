<?php

namespace App\Filament\Admin\Resources\Podcasts\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PodcastInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title'),
                ImageEntry::make('image'),
                TextEntry::make('url'),
                TextEntry::make('author'),
                TextEntry::make('category'),
                TextEntry::make('language'),
                TextEntry::make('content')
                    ->html()
                    ->columnSpanFull(),
                TextEntry::make('feed_url'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
