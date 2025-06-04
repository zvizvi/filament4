<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasUuids;

    protected $table = 'podcasts';

    protected $fillable = [
        'title',
        'description',
        'image',
        'url',
        'author',
        'category',
        'language',
        'content',
        'feed_url',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
