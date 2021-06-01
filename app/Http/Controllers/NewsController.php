<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news_list = News::orderBy("id", "desc")->paginate(10);
        return view('news.index', ['news_list' => $news_list]);
    }
}
