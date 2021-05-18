@extends('layouts.admin')

@section('content')
<form method="post" action="{{ route('news_update') }}">
	<div class="container">
		<div class="card">
			<div class="card-header">
				<div class="card mb-3">
					<div class="row g-0">
						<div class="col-md-8">
							<div class="card-body">
								<h5><input class="col-md-12" name="title" placeholder="タイトル" value="{{ $news->title }}"></input></h5>
								<textarea class="col-md-12" rows=4" cols="40" name="content" placeholder="内容" >{{ $news->content }}</textarea>
								<p class="card-text"><small class="text-muted">created at {{ optional($news->created_at)->format('Y/m/d') ?: '' }}</small></p>
							</div>
						</div>
						<div class="col-md-4">
							<img src="https://i.gyazo.com/bbb9e098f91f362fbbf490719ed91d5b.jpg" alt="...">
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">完了</button>
				</div>
			</div>
		</div>
	</div>
</form>
@endsection