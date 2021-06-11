<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class CollectionsController extends Controller
{
    public function index()
    {
        $items_list = Item::orderBy("id", "desc")->paginate(10);
        return view('collections.index', ['items_list' => $items_list]);
    }
    public function list($page_number)
    {
        $items_list = Item::where('page_number', $page_number)->get();
        return view('collections.list', ['items_list' => $items_list]);
    }
}
