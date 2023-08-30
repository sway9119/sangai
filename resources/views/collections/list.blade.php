@extends('layouts.page')

@section('main')
<div class="res_disp_main page_{{ $page_number }}">
    <ul class="default_list collection_box js_light_box">
        @foreach ($items_list as $item)
        <li class="collection_list">
            <?php $test = "img/noimage.jpg" ?>
            <img src="{{ asset($item->img)}}" data_detail="{{ $item->name }}, ¥{{ number_format($item->price)}}, {{ $item->discription }} " class="collection" onerror="this.src='{{ asset($test)}}'">
        </li>
        @endforeach
    </ul>
</div>
@endsection