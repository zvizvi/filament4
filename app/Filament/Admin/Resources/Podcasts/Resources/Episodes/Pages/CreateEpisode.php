<?php

namespace App\Filament\Admin\Resources\Podcasts\Resources\Episodes\Pages;

use App\Filament\Admin\Resources\Podcasts\Resources\Episodes\EpisodeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEpisode extends CreateRecord
{
    protected static string $resource = EpisodeResource::class;
}
