@extends('layouts.admin')

@section('content')
<div class="bd-cheatsheet container-fluid bg-white">
	<aside class="bd-aside sticky-xl-top text-muted align-self-start mb-3 mb-xl-5 px-2">
		<h2 class="h6 pt-4 pb-3 mb-4 border-bottom">MENU</h2>
		<nav class="small" id="toc">
			<ul class="list-unstyled">
				<li class="my-2">
					<a href="{{ url('admin/news_list') }}" class="btn btn-primary">News一覧</a>
				</li>
				<li class="my-2">
					<a href="{{ url('admin/colection_list') }}" class="btn btn-primary">Colection一覧</a>

				</li>
				<li class="my-2">
					<form method="post" action="{{ url('admin/logout') }}">
						@csrf
						<input type="submit" class="btn btn-danger" value="ログアウト" />
					</form>
				</li>
			</ul>
		</nav>
	</aside>
	<div class="container">
	</div>
</div>
@endsection