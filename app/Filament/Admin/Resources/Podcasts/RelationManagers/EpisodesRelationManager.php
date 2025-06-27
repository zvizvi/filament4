<?php

namespace App\Filament\Admin\Resources\Podcasts\RelationManagers;

use App\Filament\Admin\Resources\Podcasts\Resources\Episodes\EpisodeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Zvizvi\RelationManagerRepeater\Tables\RelationManagerRepeaterAction;

class EpisodesRelationManager extends RelationManager
{
    protected static string $relationship = 'episodes';
    protected static ?string $relatedResource = EpisodeResource::class;

    public static function getTitle(Model $ownerRecord, string $pageClass): string
    {
        return __('Episodes');
    }

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
                RelationManagerRepeaterAction::make(),
            ]);
    }
}
