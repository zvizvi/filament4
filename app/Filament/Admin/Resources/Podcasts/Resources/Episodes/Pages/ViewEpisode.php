<?php

namespace App\Filament\Admin\Resources\Podcasts\Resources\Episodes\Pages;

use App\Filament\Admin\Resources\Podcasts\Resources\Episodes\EpisodeResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewEpisode extends ViewRecord
{
    protected static string $resource = EpisodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
