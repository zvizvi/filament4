<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum CourseLevel: string implements HasLabel
{
    case BEGINNER = 'beginner';
    case INTERMEDIATE = 'intermediate';
    case EXPERT = 'expert';

    public function getLabel(): string
    {
        return match($this) {
            self::BEGINNER => 'Beginners',
            self::INTERMEDIATE => 'Intermediates',
            self::EXPERT => 'Experts',
        };
    }

    public function getIcon(): string
    {
        return match($this) {
            self::BEGINNER => 'heroicon-o-academic-cap',
            self::INTERMEDIATE => 'heroicon-o-beaker',
            self::EXPERT => 'heroicon-o-trophy',
        };
    }

    public function getColor(): string
    {
        return match($this) {
            self::BEGINNER => 'success',
            self::INTERMEDIATE => 'warning',
            self::EXPERT => 'danger',
        };
    }
}
