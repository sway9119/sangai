@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="card">
		<div class="card-header">管理側TOP</div>
		<div class="card-body">
			<div>
				<a href="{{ url('admin/news_list') }}" class="btn btn-primary">News一覧</a>
			</div>

			<form method="post" action="{{ url('admin/logout') }}">
				@csrf
				<input type="submit" class="btn btn-danger" value="ログアウト" />
			</form>

			<a class="navbar-brand" href="{{ url('admin') }}">
                    管理ページ
			</a>
		</div>
	</div>
</div>
@endsection