@extends('layouts.layout')

@section('title', 'ゲーム画面')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="{{ action('JudgeController@add') }}" method="post" enctype="multipart/form-data">
                
                <h2>ゲーム画面</h2>
                <p>現在のスコア</p>
                <p>{{ $score }}</p>
                <input type="hidden" name="score" value="{{ $score }}">
                <p></p>のこりライフ</p>
                <p>{{ $life }}</p>
                <input type="hidden" name="life" value="{{ $life }}">
                <p>プレイヤーの数字</p>
                <p>{{ $mynum }}</p>
                <input type="hidden" name="mynum" value="{{ $mynum }}">
                <p>CPUの数字</p>
                <p>{{ $cpunum }}</p>
                <input type="hidden" name="cpunum" value="{{ $cpunum }}">
                <input type="submit" name="decision" value="high">
                <input type="submit" name="decision" value="low">
                {{ csrf_field() }}
                <input type="submit" value="submit">
                </form>
                
                <a href="{{ url('/') }}">タイトルへ戻る</a>
                
                
            </div>
        </div>
    </div>
@endsection