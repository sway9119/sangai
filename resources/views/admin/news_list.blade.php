@extends('layouts.admin')

@section('content')
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
				</li>
				@endforeach
			</ul>
			
			<div class="mt-3">
				{{ $news_list->links() }}
			</div>
			
		</div>
	</div>
</div>
@endsection​