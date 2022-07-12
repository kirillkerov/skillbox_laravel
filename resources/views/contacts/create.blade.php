@extends('layout.master')

@section('content')

    <div class="col">
        <h1>Форма обратной связи</h1>

        <form method="post" action="/contacts">
            @csrf
            @include('layout.errors')
            <div class="form-group">
                <label for="inputEmail">Введите email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Введите email" name="email">
            </div>
            <div class="form-group">
                <label for="textareaMessage">Текст</label>
                <textarea class="form-control" id="textareaMessage" rows="3" name="message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>

@endsection
