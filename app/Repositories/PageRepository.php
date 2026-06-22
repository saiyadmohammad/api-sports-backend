<?php

namespace App\Repositories;
use App\Http\Resources\PageResource;
use App\Models\Pricing;
use App\Models\Page;
use App\Models\Blog;

class PageRepository implements PageRepositoryInterface
{
    public function all()
    {
        return Page::with('section')->get();
        // return  PageResource::collection( $data );
    }
    public function find(string $slug)
    {
        $data['page'] = Page::where('slug', $slug)->with('section')->first();
        $data['settings'] = Page::where('slug', 'setting')->with('section')->first();
        $data['blogs'] = Blog::get();
        $data['pricings'] = Pricing::get();
        
        return $data;
    }
    public function create(array $data)
    {
        return Page::create($data);
    }
    public function update(int $id, array $data)
    {
        $page = Page::find($id);
        $page->update($data);
        return $page;
    }
    public function delete(int $id)
    {
        return Page::destroy($id);
    }
}