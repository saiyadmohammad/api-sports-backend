<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\BlogResource;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected function modifyBlogImageUrl(array &$blogs)
    {
        foreach ($blogs as &$blog) {
            $blog['image'] = asset(Storage::url($blog['image']));
            $blog['blog_data'] =  Str::limit($blog['blog_data'], 200);
            //  Str::limit('This is a very long text', 10);
        }
    }

    protected function modifySingleBlogImageUrl(array &$blog)
    {
        $blog['image'] = asset(Storage::url($blog['image']));
    }


    public function index()
    {
        $blogs = Blog::all();
        // $this->modifyBlogImageUrl($blogs);
        $blogs = BlogResource::collection($blogs);

        return response()->json($blogs, 200);
    }

    public function getBlog(Request $request)
    {
        $blog = Blog::where("slug", $request->slug)->first();
        // $this->modifySingleBlogImageUrl($blog);
        $blog = new BlogResource($blog);
        return response()->json($blog, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
