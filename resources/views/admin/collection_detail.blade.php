@extends('layouts.admin')

@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert" onclick="this.classList.add('hidden')">
    {{ session('status') }}
</div>
@endif
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5>{{ $item->name }}</h5>
                            <p>¥{{ number_format($item->price)}}</p>
                            <p class="card-text">{{ $item->discription }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset($item->img)}}" alt="...">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ url('admin/collection_edit/' . $item->id) }}" class="btn btn-info">編集</a>
                <a href="{{ url('admin/collection_delete/' . $item->id) }}" class="btn btn-info">削除</a>
            </div>
        </div>
    </div>
</div>
@endsection