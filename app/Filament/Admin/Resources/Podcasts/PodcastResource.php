<?php

namespace App\Filament\Admin\Resources\Podcasts;

use App\Filament\Admin\Resources\Podcasts\Pages\CreatePodcast;
use App\Filament\Admin\Resources\Podcasts\Pages\EditPodcast;
use App\Filament\Admin\Resources\Podcasts\Pages\ListPodcasts;
use App\Filament\Admin\Resources\Podcasts\Pages\ViewPodcast;
use App\Filament\Admin\Resources\Podcasts\Schemas\PodcastForm;
use App\Filament\Admin\Resources\Podcasts\Schemas\PodcastInfolist;
use App\Filament\Admin\Resources\Podcasts\Tables\PodcastsTable;
use App\Models\Podcast;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PodcastResource extends Resource
{
    protected static ?string $model = Podcast::class;
    protected static string|BackedEnum|null $navigationIcon = Heroicon::Signal;

    public static function getLabel(): string
    {
        return __('Podcast');
    }

    public static function getPluralLabel(): string
    {
        return __('Podcasts');
    }

    public static function form(Schema $schema): Schema
    {
        return PodcastForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PodcastInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PodcastsTable::configure($table);
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
            'index' => ListPodcasts::route('/'),
            'create' => CreatePodcast::route('/create'),
            'view' => ViewPodcast::route('/{record}'),
            'edit' => EditPodcast::route('/{record}/edit'),
        ];
    }
}
