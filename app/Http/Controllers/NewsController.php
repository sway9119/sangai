<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index() {
        $news = DB::select('select * from news');
        return view('news.index', ['news' => $news]);
    }
}
