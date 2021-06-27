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
<form method="post" action="/admin/collection_create">
    @csrf
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <div class="card-body">
                                <imput type="hidden" name="id"">
                                    <h5>
                                        <input class=" col-md-12" name="name" placeholder="商品名"">
                                    </h5>
                                    <p><input class=" col-md-12" type="number" name="price" placeholder="価格""></p>
                                    <textarea class=" col-md-12" rows="10" cols="40" name="discription" placeholder="説明"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <p><input class="col-md-12" name="img" placeholder="画像のパス"></p>
                                <p><input class="col-md-12" type="number" name="page_number" placeholder="ページ番号"></p>
                                <p><input class="col-md-12" name="tag" placeholder="タグ"></p>
                            </div>
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