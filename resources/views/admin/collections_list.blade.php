@extends('layouts.admin')

@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert" onclick="this.classList.add('hidden')">
    {{ session('status') }}
</div>
@endif
<div class="container">
    <div class="card">
        <a href="{{ url('admin/collections_add/') }}" class="btn btn-primary">新規作成</a>
        <div class="card-header">Collections一覧</div>
        <div class="card-body">
            <ul class="list-group">
                @foreach ($items_list as $item)
                <li class="list-group-item">
                    <a href="{{ url('admin/collections/' . $item->id) }}">
                        {{ $item->name }}
                    </a>
                    <div class="text-right">
                        <a href="{{ url('admin/collections_edit/' . $item->id) }}" class="btn btn-info">編集</a>
                        <a href="{{ url('admin/collections_delete/' . $item->id) }}" class="btn btn-info" onClick="delete_alert(event);return false;">削除</a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="mt-3">
        {{ $items_list->links() }}
    </div>
</div>
@endsection​