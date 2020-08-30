@extends('layouts.layout')

@section('title', '判定')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ゲーム画面</h2>
                <p>現在のスコア</p>
                <p>{{ $score }}</p>
                <p>のこりライフ</p>
                <p>{{ $life }}</p>
                <p>プレイヤーの数字</p>
                <p>{{ $mynum }}</p>
                <p>CPUの数字</p>
                <p>{{ $cpunum }}</p>
                <p>決断</p>
                <p>{{ $decision }}</p>
                <p>正解</p>
                <p>{{ $highlow }}</p>
                <p>判定</p>
                <p>{{ $judge }}</p>
                <a href="{{ action('GameController@game_add', ['score' => $score, 'life' => $life]) }}">次へ</a>
            </div>
        </div>
    </div>
@endsection