@extends('layouts.layout')

@section('title', 'highscore')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>High score画面</h2>
                <div class="row">
                    <div class="list-news col-md-12 mx-auto">
                        <div class="row">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th width="10%">name</th>
                                        <th width="20%">score</th>
                                        <th width="50%">comment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($score->all() as $score)
                                    <tr>
                                        <th>{{ $score->name }}</th>
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
            </div>
        </div>
    </div>
@endsection