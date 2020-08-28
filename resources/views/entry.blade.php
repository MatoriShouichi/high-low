@extends('layouts.layout')

@section('title', 'スコアエントリー')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>スコアエントリー</h2>
                <p>score</p>
                <p>{{ $score }}</p>
                <a href="{{ url('/') }}">タイトル画面へ</a>
            </div>
        </div>
    </div>
@endsection