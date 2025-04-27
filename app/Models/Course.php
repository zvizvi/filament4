<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
