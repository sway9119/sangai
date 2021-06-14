@extends('layouts.page')

@section('main')
<div class="res_disp_main page_{{ $page_number }}">
    <ul class="default_list collection_box js_light_box">
        @foreach ($items_list as $item)
        <li class="collection_list">
            <img src="{{ asset($item->img)}}" data_detail="[' . $item->name . '] ' . $item->price . '" class="collection">
        </li>
        @endforeach
    </ul>
</div>
@endsection