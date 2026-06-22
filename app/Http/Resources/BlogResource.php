<?php

namespace App\Http\Resources;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Resources\Json\JsonResource;

class BlogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            "id" => $this->id,
            "title" => $this->title ? $this->title : "",
            "subtitle" => $this->subtitle,
            "blog_data" => Str::limit($this->blog_data, 200),
            "blog_full_data" => $this->blog_data,
            "image" => env('APP_URL') . Storage::url($this->image),
            "slug" => $this->slug,
            "tags" => $this->tags,
            "keywords" => $this->keywords,
            "created_at" => $this->created_at,
            "update_at" => $this->updated_at,
        ];
    }
}
