@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="card">
		<div class="card-header">
			<a href="{{ url('admin/news_list') }}">News一覧</a> &gt; News詳細
		</div>
		<div class="card-body">

			<ul class="list-group">
				<li class="list-group-item">名前: {{ $news->title }}</li>
				<li class="list-group-item">内容: {{ $news->message }}</li>
				<li class="list-group-item">作成日: {{ optional($news->created_at)->format('Y/m/d') ?: '' }}</li>
				<li class="list-group-item">更新日: {{ optional($news->updated_at)->format('Y/m/d') ?: '' }}</li>
			</ul>
		</div>
	</div>
</div>
@endsection