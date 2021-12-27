<?php

namespace App\Http\Controllers;

use App\Models\Page;

class PageController extends Controller
{

    public function index()
    {
        $pages = Page::get();

        return view('sayfalar.index', compact('pages'));
    }

    public function show($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();

        return view('sayfalar.show', compact('page'));
    }

    public function showOptional(Page $page)
    {
        return view('sayfalar.show', compact('page'));
    }



}
