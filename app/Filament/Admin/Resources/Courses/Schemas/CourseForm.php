<?php

namespace App\Filament\Admin\Resources\Courses\Schemas;

use App\Enums\CourseLevel;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CourseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                RichEditor::make('description')
                    ->required(),
                TextInput::make('price')
                    ->numeric()
                    ->required(),
                Select::make('level')
                    ->options(CourseLevel::class)
                    ->selectablePlaceholder(false)
                    ->native(false),
            ]);
    }
}
