<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'blog_data',
        'image',
        'type',
        'slug',
        'order',
        'is_active',
        'author',
        'tags',
        'keywords',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'tags' => 'array',
        'keywords' => 'array',
    ];
}
