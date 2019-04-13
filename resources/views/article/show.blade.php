@extends('layout')

@section('title')
    {{ $article->title }}
@endsection

@section('content')
    <section class="my-5">
        <div class="container">
            <h1>{{ $article->title }}</h1>
            <p>{{ $article->body }}</p>
            <div class="d-flex justify-content-between">
                <div class="btn-group">
                    <a href="{{ route('article.edit', $article->id) }}" class="btn btn-sm btn-primary">Редактировать</a>
                    <button class="btn btn-sm btn-danger" onclick="$('#destroy').submit();">Удалить</button>
                </div>
                <div class="d-flex justify-content-end align-content-center">
                    <span class="text-right">{{ $article->created_at->locale('ru')->diffForHumans() }}</span>
                </div>
            </div>
        </div>

        <form action="{{ route('article.destroy', $article->id) }}" id="destroy" method="POST" class="d-none">
            @csrf
            @method('DELETE')
        </form>
    </section>
@endsection