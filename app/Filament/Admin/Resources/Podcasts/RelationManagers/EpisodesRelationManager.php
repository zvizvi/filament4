<?php

namespace App\Filament\Admin\Resources\Podcasts\RelationManagers;

use App\Filament\Admin\Resources\Podcasts\Resources\Episodes\EpisodeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class EpisodesRelationManager extends RelationManager
{
    protected static string $relationship = 'episodes';

    protected static ?string $relatedResource = EpisodeResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
            ]);
    }
}
