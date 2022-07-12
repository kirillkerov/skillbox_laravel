@extends('layout.master')

@section('content')

    <div class="col-md-8 blog-main">
        <div class="row mb-2">
            @foreach($articles as $article)
                <div class="col-md-6">
                    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-success">Develop</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="/articles/{{ $article->id }}">{{ $article->title }}</a>
                            </h3>
                            <div class="mb-1 text-muted">{{ $article->created_at->toFormattedDateString() }}</div>
                            <p class="card-text mb-auto">{{ $article->description }}</p>
                            <a href="/articles/{{ $article->id }}">Continue reading</a>
                        </div>
{{--                        <img class="card-img-right flex-auto d-none d-lg-block" src="" alt="Card image cap">--}}
                    </div>
                </div>
            @endforeach
        </div>

    </div><!-- /.blog-main -->

@endsection
