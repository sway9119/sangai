@extends('layouts.page')

@section('main')
<div class="l_news l_info">
	<ul class="default_list">
		@foreach ($items_list as $item)
		<li class="news_list">
			<div class="news_text">
				<div class="news_content">
					<h3>{{ $items->name }}</h3>
					<span class="news_date">{{ $item->created_at }}</span>
					<div>{{ $item->price }}</div>
					<div class="news_img_box"></div>
				</div>
			</div>
		</li>
		@endforeach
	</ul>
</div>
<div class="mt-3">
	{{ $items_list->links() }}
</div>
@endsection