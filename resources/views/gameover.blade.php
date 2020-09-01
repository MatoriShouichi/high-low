@extends('layouts.layout')

@section('title', 'ゲームオーバー')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ゲームオーバー</h2>
                <p>score</p>
                <p>{{ $score }}</p>
                @guest
                    {{-- ログインしていなかったらタイトルへのリンクのみ --}}
                    <a href="{{ url('/') }}">タイトル画面へ</a>
                @else
                    {{-- ログインしていたらスコア登録するかしないか --}}
                    <p>スコア登録しますか?</p>
                    <a href="{{ action('GameController@entry_add', ['score' => $score]) }}">ハイ</a>
                    <a href="{{ url('/') }}">いいえ</a>
                @endguest
            </div>
        </div>
    </div>
@endsection