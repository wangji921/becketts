<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function root()
    {
        return view('pages.root');
    }

    // public function home()
    // {
    //     return view('static_pages/index');
    // }

    // public function help()
    // {
    //     return view('static_pages/help');
    // }

    // public function news()
    // {
    //     return view('static_pages/news');
    // }

    // public function about()
    // {
    //     return view('static_pages/about');
    // }
}
