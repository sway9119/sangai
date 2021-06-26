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
    function showCollectionDetail($id)
    {
        $item = Item::find($id);
        return view("admin.collection_detail", ["item" => $item]);
    }
    function editCollectionDetail($id)
    {
        $item = Item::find($id);
        return view("admin.collection_edit", ['item' => $item]);
    }
    function updateCollectionDetail(Request $request)
    {
        $item = Item::findOrFail($request->id);
        $item->name = $request->input('name');
        $item->price = $request->input('price');
        $item->img = $request->input('img');
        $item->discription = $request->input('discription');
        $item->save();
        return redirect()->route('collection_detail', ['id' => $item->id, 'item' => $item])->with('status', '編集が完了しました。');
    }
    function deleteCollection($id)
    {
        Item::where('id', $id)->delete();
        $item = Item::orderBy("id", "desc")->paginate(10);
        return redirect()->route('collections_list', ['item' => $item])->with('status', '削除が完了しました。');
    }
}
