<?php

namespace App\Models;

use App\Models\Section;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'logo',
        'description',
        'meta_title',
        'meta_description',
    ];

    public function section(): HasMany
    {
        return $this->hasMany(Section::class);
    }
}
