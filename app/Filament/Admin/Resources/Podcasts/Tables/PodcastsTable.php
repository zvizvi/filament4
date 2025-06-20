<?php

namespace App\Filament\Admin\Resources\Podcasts\Tables;

use App\Filament\Admin\Resources\Podcasts\PodcastResource;
use App\Models\Podcast;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PodcastsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->recordUrl(fn (Podcast $record) => PodcastResource::getUrl('view', ['record' => $record]))
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                ImageColumn::make('image'),
                TextColumn::make('url')
                    ->searchable(),
                TextColumn::make('author')
                    ->searchable(),
                TextColumn::make('category')
                    ->searchable(),
                TextColumn::make('language')
                    ->searchable(),
                TextColumn::make('feed_url')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ]);
    }
}
