<?php

namespace App\Filament\Admin\Resources\Podcasts\Resources\Episodes;

use App\Filament\Admin\Resources\Podcasts\PodcastResource;
use App\Filament\Admin\Resources\Podcasts\Resources\Episodes\Pages\CreateEpisode;
use App\Filament\Admin\Resources\Podcasts\Resources\Episodes\Pages\EditEpisode;
use App\Filament\Admin\Resources\Podcasts\Resources\Episodes\Pages\ViewEpisode;
use App\Filament\Admin\Resources\Podcasts\Resources\Episodes\Schemas\EpisodeForm;
use App\Filament\Admin\Resources\Podcasts\Resources\Episodes\Schemas\EpisodeInfolist;
use App\Filament\Admin\Resources\Podcasts\Resources\Episodes\Tables\EpisodesTable;
use App\Models\Episode;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EpisodeResource extends Resource
{
    protected static ?string $model = Episode::class;
    protected static string|BackedEnum|null $navigationIcon = Heroicon::Microphone;
    protected static ?string $parentResource = PodcastResource::class;

    public static function getLabel(): string
    {
        return __('Episode');
    }

    public static function getPluralLabel(): string
    {
        return __('Episodes');
    }

    public static function form(Schema $schema): Schema
    {
        return EpisodeForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return EpisodeInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EpisodesTable::configure($table);
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
            'create' => CreateEpisode::route('/create'),
            'view' => ViewEpisode::route('/{record}'),
            'edit' => EditEpisode::route('/{record}/edit'),
        ];
    }
}
