@extends('layouts.layout')

@section('title', 'ゲームオーバー')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ゲームオーバー</h2>
                <p>score</p>
                <p>{{ $score }}</p>
                <p>スコア登録しますか?</p>
                <a href="{{ action('GameController@entry_add', ['score' => $score]) }}">ハイ</a>
                <a href="{{ url('/') }}">いいえ</a>
            </div>
        </div>
    </div>
@endsection