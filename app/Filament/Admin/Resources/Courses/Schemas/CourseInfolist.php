<?php

namespace App\Filament\Admin\Resources\Courses\Schemas;

use App\Models\Course;
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
                    ->icon(fn(Course $record): string => $record->level?->getIcon() ?? 'heroicon-o-question-mark-circle')
            ]);
    }
}
