@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <a href="/about/add" class="a_default">ABOUT</a>
                <a href="/admin/news_list" class="a_default">NEWS</a>
                <a href="/collection/add" class="a_default">COLLECTION</a>
                <a href="/bridal/add" class="a_default">BRIDAL</a>
                <a href="/shop/add" class="a_default">SHOP</a>
                <a href="/contact/add" class="a_default">CONTACT</a>
            </div>
        </div>
    </div>
</div>
@endsection