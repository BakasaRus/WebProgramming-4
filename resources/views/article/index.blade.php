@extends('layout')

@section('title')
    Домашняя страница
@endsection

@section('content')
    @foreach($articles as $article)
        <section class="my-5">
            <a href="{{ route('article.show', $article->id) }}">
                <h1>{{ $article->title }}</h1>
            </a>
            <p>{{ $article->body }}</p>
            <p class="text-right">{{ $article->created_at->locale('ru')->diffForHumans() }}</p>
        </section>
    @endforeach
@endsection