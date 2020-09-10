@extends('layouts.layout')

@section('title', 'High&Lowゲーム')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>タイトル画面</h2>
                <a href="{{ url('/game') }}">ゲーム開始</a><br>
                <a href="{{ url('/howto') }}">説明</a><br>
                <a href="{{ url('/highscore') }}">ハイスコア</a><br>
                <a href="{{ url('/myscore') }}">マイスコア</a><br>
            </div>
        </div>
    </div>
@endsection