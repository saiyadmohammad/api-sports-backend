<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'page_id',
        'is_active',
        'section_data',
    ];

    protected $casts = [
        'section_data' => 'array',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
