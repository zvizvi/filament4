<?php

namespace App\Filament\Admin\Resources\Courses\Schemas;

use App\Enums\CourseLevel;
use App\Filament\Admin\Resources\Courses\Resources\Lessons\Schemas\LessonForm;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Repeater\TableColumn;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Schema;

class CourseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make()
                    ->schema([
                        Tabs\Tab::make('info')
                            ->schema([
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
                            ]),
                        Tabs\Tab::make('lessons')
                            ->schema([
                                Repeater::make('lessons')
                                    ->relationship('lessons')
                                    ->table([
                                        TableColumn::make('name'),
                                        TableColumn::make('description'),
                                    ])
                                    ->schema(LessonForm::configure($schema)->getComponents())
                                    ->columnSpanFull(),
                            ]),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),
            ]);
    }
}
