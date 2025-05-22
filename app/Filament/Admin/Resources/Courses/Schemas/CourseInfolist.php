<?php

namespace App\Filament\Admin\Resources\Courses\Schemas;

use App\Filament\Admin\Resources\Courses\Resources\Lessons\Schemas\LessonInfolist;
use App\Models\Course;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CourseInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('description')
                    ->html(),
                TextEntry::make('price'),
                TextEntry::make('level')
                    ->badge()
                    ->color(fn(Course $record): string => $record->level?->getColor() ?? 'gray')
                    ->icon(fn(Course $record): string => $record->level?->getIcon() ?? 'heroicon-o-question-mark-circle'),
                RepeatableEntry::make('lessons')
                    ->schema(LessonInfolist::configure($schema)->getComponents())
                    ->columns(5)
                    ->columnSpanFull(),
            ]);
    }
}
