@extends('layouts.page')

@section('main')
<div class="res_disp_main page_1">
    <div class="l_center l_collection">
        <ul class="default_list collection_box js_light_box">
            @foreach ($items_list as $item)
            <li class="collection_list">
                <img src="{{ asset('img/collections/ring1.jpeg')}}" data_detail="[' . $item->name . '] ' . $item->price . '" class="collection">
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection