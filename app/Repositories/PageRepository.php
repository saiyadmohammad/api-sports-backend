<?php

namespace App\Repositories;
use App\Models\Page;

class PageRepository implements PageRepositoryInterface
{
    public function all()
    {
        return Page::with('section')->get();
    }
    public function find(string $slug)
    {
        return Page::where('slug', $slug)->with('section')->firstorFail();
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