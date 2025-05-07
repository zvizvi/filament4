<?php

namespace App\Filament\Admin\Resources\Courses\Pages;

use App\Filament\Admin\Resources\Courses\CourseResource;
use Dowhile\FilamentTweaks\Traits\RedirectToViewAfterSave;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCourse extends EditRecord
{
    use RedirectToViewAfterSave;

    protected static string $resource = CourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
