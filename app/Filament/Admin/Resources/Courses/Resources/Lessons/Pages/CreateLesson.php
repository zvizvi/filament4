<?php

namespace App\Filament\Admin\Resources\Courses\Resources\Lessons\Pages;

use App\Filament\Admin\Resources\Courses\Resources\Lessons\LessonResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLesson extends CreateRecord
{
    protected static string $resource = LessonResource::class;
}
