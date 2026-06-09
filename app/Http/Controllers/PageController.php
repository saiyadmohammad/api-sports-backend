<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Sections;
use Illuminate\Http\Request;
use App\Repositories\PageRepositoryInterface;

class PageController extends Controller
{
    protected $pageRepository;
    public function __construct(PageRepositoryInterface $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }
    
    public function index()
    {
        $data['page'] = $this->pageRepository->all();
        return view('test', $data);
    }

    public function getPage(string $slug)
    {
        // dd($slug);
        $data['page'] = $this->pageRepository->find($slug);
        return view('test', $data);
    }

    public function getHome()
    {
        $data['page'] = $this->pageRepository->find('home');
        return view('test', $data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }
}
