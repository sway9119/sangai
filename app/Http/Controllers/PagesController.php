<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function top()
    {
        return view('pages.top');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function shop()
    {
        return view('pages.shop');
    }
}
