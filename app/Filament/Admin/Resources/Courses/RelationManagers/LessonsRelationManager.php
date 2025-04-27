<?php

namespace App\Filament\Admin\Resources\Courses\RelationManagers;

use App\Filament\Admin\Resources\Courses\Resources\Lessons\LessonResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class LessonsRelationManager extends RelationManager
{
    protected static string $relationship = 'lessons';

    protected static ?string $relatedResource = LessonResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
            ]);
    }
}
