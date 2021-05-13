@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="card">
		<div class="card-header">管理側TOP</div>
		<div class="card-body">
			<span>
				<a href="{{ url('admin/news_list') }}" class="btn btn-primary">News一覧</a>
			</span>
			<span>
				<a href="{{ url('admin/colection_list') }}" class="btn btn-primary">Colection一覧</a>
			</span>
			
			<form method="post" action="{{ url('admin/logout') }}">
				@csrf
				<input type="submit" class="btn btn-danger" value="ログアウト" />
			</form>
		</div>
	</div>
</div>
@endsection