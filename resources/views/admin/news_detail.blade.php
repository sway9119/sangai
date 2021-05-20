@extends('layouts.admin')

@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert" onclick="this.classList.add('hidden')">
	{{ session('status') }}
</div>
@endif
<div class="container">
	<div class="card">
		<div class="card-header">
			<div class="card mb-3">
				<div class="row g-0">
					<div class="col-md-8">
						<div class="card-body">
							<h5>{{ $news->title }}</h5>
							<p>{{ $news->message }}</p>
							<p class="card-text"><small class="text-muted">created at {{ optional($news->created_at)->format('Y/m/d') ?: '' }}</small></p>
						</div>
					</div>
					<div class="col-md-4">
						<img src="https://i.gyazo.com/bbb9e098f91f362fbbf490719ed91d5b.jpg" alt="...">
					</div>
				</div>
			</div>
			<div class="card-footer">
				<a href="{{ url('admin/news_edit/' . $news->id) }}" class="btn btn-info">編集</a>
				<a href="{{ url('admin/news_delete/' . $news->id) }}" class="btn btn-info">削除</a>
			</div>
		</div>
	</div>
</div>
@endsection