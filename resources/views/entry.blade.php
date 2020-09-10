@extends('layouts.layout')

@section('title', 'スコアエントリー')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="{{ action('GameController@create') }}" method="post" enctype="multipart/form-data">
                    <h2>スコアエントリー</h2>
                    <p>score</p>
                    <p>{{ $score }}</p>
                    <input type="hidden" name="score" value="{{ $score }}">
                    <p>name</p>
                    <p>{{ $name }}</p>
                    <input type="hidden" name="user_id" value="{{ $user_id }}">
                    <p>comment</p>
                    <div>
                        <input type="text" name="comment">
                    </div>
                    <input type="submit" value="登録">
                    {{ csrf_field() }}
                </form>
                <a href="{{ url('/') }}">タイトル画面へ</a>
            </div>
        </div>
    </div>
@endsection