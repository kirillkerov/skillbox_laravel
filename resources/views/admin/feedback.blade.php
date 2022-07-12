@extends('layout.master')

@section('content')

    <div class="col">
        <h1>Список обращений</h1>

        @foreach($messages as $message)
            <strong class="email text-primary">{{ $message->email }}</strong>
            <div class="message">{{ $message->message }}</div>
            <div class="created_at text-muted text">{{ $message->created_at->toFormattedDateString() }}</div>
        @endforeach
    </div>

@endsection
