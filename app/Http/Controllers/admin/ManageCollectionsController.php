<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ManageCollectionsController extends Controller
{
    function showCollectionsList()
    {
        $items_list = Item::orderBy("id", "desc")->paginate(10);
        return view("admin.collections_list", ["items_list" => $items_list]);
    }
    function editCollectionDetail($id)
    {
        $item = Item::find($id);
        return view("admin.collection_edit", ['item' => $item]);
    }
}
