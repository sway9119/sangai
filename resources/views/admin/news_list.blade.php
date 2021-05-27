@extends('layouts.admin')

@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert" onclick="this.classList.add('hidden')">
	{{ session('status') }}
</div>
@endif
<div class="container">
	<div class="card">
		<div class="card-header">News一覧</div>
		<div class="card-body">
			<ul class="list-group">
				@foreach ($news_list as $new)
				<li class="list-group-item">
					<a href="{{ url('admin/news/' . $new->id) }}">
						{{ $new->title }}
					</a>
					<div class="text-right">
						<a href="{{ url('admin/news_edit/' . $new->id) }}" class="btn btn-info">編集</a>
						<a href="{{ url('admin/news_delete/' . $new->id) }}" class="btn btn-info" onClick="delete_alert(event);return false;">削除</a>
					</div>
				</li>
				@endforeach
			</ul>
			<div class="mt-3">
				{{ $news_list->links() }}
			</div>
		</div>
		<a href="{{ url('admin/news_add/') }}" class="btn btn-primary">新規作成</a>
	</div>
</div>
@endsection​