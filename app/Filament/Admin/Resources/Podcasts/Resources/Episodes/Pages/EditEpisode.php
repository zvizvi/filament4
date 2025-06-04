<?php

namespace App\Filament\Admin\Resources\Podcasts\Resources\Episodes\Pages;

use App\Filament\Admin\Resources\Podcasts\Resources\Episodes\EpisodeResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditEpisode extends EditRecord
{
    protected static string $resource = EpisodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
