@extends('layout.master')

@section('content')

    <div class="col">
        <h1>{{ $article['title'] }}</h1>
        <p>{{ $article['body'] }}</p>
        <a href="/">Вернуться на главную</a>
    </div>

@endsection
