<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'tag',
        'is_popular',
        'price',
        'currency',
        'duration',
        'order',
        'is_active',
        'features',
        'button_text',
    ];

    protected $casts = [
        'is_popular' => 'boolean',
        'is_active' => 'boolean',
        'features' => 'array',
    ];
}
