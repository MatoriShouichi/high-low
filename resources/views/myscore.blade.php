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
                    <div class="row">
                        <div class="list-news col-md-12 mx-auto">
                            <div class="row">
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th width="10%">score</th>
                                            <th width="20%">comment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($score->all() as $score)
                                        <tr>
                                            <td>{{ $score->score }}</td>
                                            <td>{{ $score->comment }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('/') }}">タイトルへ戻る</a>
                @endguest
            </div>
        </div>
    </div>
@endsection