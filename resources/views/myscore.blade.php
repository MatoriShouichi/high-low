@extends('layouts.layout')

@section('title', 'myscore')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                @guest
                    {{-- ログインしていなかったらタイトルへのリンクのみ --}}
                    <p>ログインしてください</p>
                    <a href="{{ url('/') }}">タイトル画面へ</a>
                @else
                    {{-- ログインしていたら自分のスコア表示 --}}
                    <h2>my score画面</h2>
                    <a href="{{ url('/') }}">タイトルへ戻る</a>
                @endguest
            </div>
        </div>
    </div>
@endsection