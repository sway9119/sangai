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
}
