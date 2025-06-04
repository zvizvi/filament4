<?php

namespace App\Filament\Admin\Resources\Podcasts\Pages;

use App\Filament\Admin\Resources\Podcasts\PodcastResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePodcast extends CreateRecord
{
    protected static string $resource = PodcastResource::class;
}
