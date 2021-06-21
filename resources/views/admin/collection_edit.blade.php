@extends('layouts.admin')

@section('content')
@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="post" action="/admin/collection_update/{{ $item->id }}">
    @csrf
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <div class="card-body">
                                <imput type="hidden" name="id" value="{{$item->id}}">
                                    <h5><input class="col-md-12" name="name" placeholder="商品名" value="{{ $item->name }}"></h5>
                                    <p><input class="col-md-12" name="price" placeholder="価格" value="¥{{ number_format($item->price)}}"></p>
                                    <textarea class="col-md-12" rows=10" cols="40" name="discription" placeholder="説明">{{ $item->discription }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset($item->img)}}" alt="...">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">完了</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection