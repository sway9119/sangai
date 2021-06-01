@extends('layouts.page')

@section('main')
<div class="l_news l_info">
    <ul class="default_list">
        @foreach ($news_list as $news)
        <li class="news_list">
            <div class="news_text">
                <div class="news_content">
                    <h3>{{ $news->title }}</h3>
                    <span class="news_date">{{ $news->created_at }}</span>
                    <div>{{ $news->message }}</div>
                    <div class="news_img_box"></div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>
<div class="mt-3">
    {{ $news_list->links() }}
</div>
@endsection