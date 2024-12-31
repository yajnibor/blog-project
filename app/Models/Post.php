<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    use HasTags;

    protected $casts = [
        'published_at' => 'date',
    ];

    protected $fillable = [
        'title',
        'description',
        'slug',
        'content',
        'published_at',
        'seo_title',
        'seo_description',
        'image',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
