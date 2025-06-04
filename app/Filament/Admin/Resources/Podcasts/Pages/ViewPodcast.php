<?php

namespace App\Filament\Admin\Resources\Podcasts\Pages;

use App\Filament\Admin\Resources\Podcasts\PodcastResource;
use App\Filament\Admin\Resources\Podcasts\RelationManagers\EpisodesRelationManager;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPodcast extends ViewRecord
{
    protected static string $resource = PodcastResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }

    public function getRelationManagers(): array
    {
        return [
            EpisodesRelationManager::class,
        ];
    }
}
