<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Auth;

class ManageNewsController extends Controller
{
	function showNewsList(){
		$news_list = News::orderBy("id", "desc")->paginate(10);
		return view("admin.news_list", [
			"news_list" => $news_list
		]);
	}
	function showNewsDetail($id){
		$news = News::find($id);
		return view("admin.news_detail", ["news" => $news]);
	}
	function editNewsDetail($id){
		$news = News::find($id);
		return view("admin.news_edit", ['news' => $news]);
	}
	function updateNewsDetail(Request $request){
		$news = News::findOrFail($request->id);
		$news->title = $request->input('title');
		$news->message = $request->input('message');
		$news->save();
		return redirect()->route('news_detail', ['id' => $news->id, 'news' => $news])->with('status', '編集が完了しました。');
	}
    function addNews(){
		return view("admin.news_add");
	}
	function createNews(Request $request){
		$this->validate($request, News::$rules);
		$news = new News;
		$news->create_user = "admin";
		$news->update_user = "admin";
		$form = $request->all();
		unset($form['_token']);
		$news->fill($form)->save();
		return redirect()->route('news_list')->with('status', '新規作成が完了しました。');

	}
	function deleteNews($id){
		News::where('id', $id)->delete();
		$news_list = News::orderBy("id", "desc")->paginate(10);
		return view("admin.news_list", [
			"news_list" => $news_list
		]);
	}
}