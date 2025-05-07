<?php

namespace App\Models;

use App\Enums\CourseLevel;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = [
        'name',
        'description',
        'price',
        'level',
    ];

    protected $casts = [
        'level' => CourseLevel::class,
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
