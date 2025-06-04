<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasUuids;

    protected $table = 'episodes';

    protected $fillable = [
        'name',
        'number',
        'audio_url',
        'audio_file',
        'content',
        'published_at',
        'podcast_id',
    ];

    protected $casts = [
        'number' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'published_at' => 'datetime',
    ];

    /**
     * Get the podcast that owns the episode.
     */
    public function podcast()
    {
        return $this->belongsTo(Podcast::class);
    }
}
