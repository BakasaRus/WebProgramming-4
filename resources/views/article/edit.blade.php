@extends('partials.layout')

@section('title')
    Редактирование статьи "{{ $article->title }}"
@endsection

@section('content')
    <section class="mt-5">
        <h1>Редактирование статьи "{{ $article->title }}"</h1>
        @component('partials.errors')
            <strong>При редактировании статьи возникли следующие ошибки:</strong>
        @endcomponent
        <form action="{{ route('article.update', $article->id) }}" method="POST">
            @csrf
            @method('PATCH')
            @include('article.form')
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </section>
@endsection