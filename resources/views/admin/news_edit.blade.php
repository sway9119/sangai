@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="card">
		<div class="card-header">
			<a href="{{ url('admin/news_list') }}">News一覧</a><a href="{{ url('admin/news_detail') }}">&gt; News詳細</a>&gt; News編集
			<div class="text-right">
			</div>
		</div>
		<div class="card-body">
			<ul class="list-group">
				<div class="card mb-3">
					<div class="row g-0">
                        <form action='{{ route('news_edit') }}' method='post'>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $news->title }}</h5>
                                    <p class="card-text">{{ $news->message }}</p>
                                    <p class="card-text"><small class="text-muted">created at {{ optional($news->created_at)->format('Y/m/d') ?: '' }}</small></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="https://i.gyazo.com/bbb9e098f91f362fbbf490719ed91d5b.jpg" alt="...">
                            </div>
                            <div class="card-footer">

                            </div>
                        </form>
					</div>
				</div>
			</ul>
		</div>
	</div>
</div>
@endsection