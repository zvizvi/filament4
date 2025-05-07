<?php

namespace App\Filament\Admin\Resources\Courses\Resources\Lessons\Pages;

use App\Filament\Admin\Resources\Courses\Resources\Lessons\LessonResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditLesson extends EditRecord
{
    protected static string $resource = LessonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('view', ['record' => $this->record, 'course' => $this->getParentModel()]);
    }
}
