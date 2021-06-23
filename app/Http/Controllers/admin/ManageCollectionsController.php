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
    function updateCollectionDetail(Request $request)
    {
        $collection = Item::findOrFail($request->id);
        $collection->name = $request->input('name');
        $collection->price = $request->input('price');
        $collection->img = $request->input('img');
        $collection->discription = $request->input('discription');
        $collection->save();
        return redirect()->route('collection_detail', ['id' => $collection->id, 'collection' => $collection])->with('status', '編集が完了しました。');
    }
}
