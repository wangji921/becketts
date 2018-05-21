<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('static_pages/index');
    }

    public function help()
    {
        return view('static_pages/help');
    }

    public function news()
    {
        return view('static_pages/news');
    }
}
