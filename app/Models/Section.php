<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'page_id',
        'type',
        'order',
        'is_active',
        'section_data',
    ];

    protected $casts = [
        'section_data' => 'array',
        'is_active' => 'boolean',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    protected function sectionData(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => json_decode($value,true),
        );
    }

}
