@extends('layouts.page')

@section('main')
<div class="l_news l_info">
    <ul class="default_list">
        @foreach ($news as $new)
        <li class="news_list">
            <div class="news_text">
                <div class="news_content">
                    <h3>{{ $new->title }}</h3>
                    <span class="news_date">{{ $new->created_at }}</span>
                    <div>{{ $new->message }}</div>
                    <div class="news_img_box"></div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>
@endsection