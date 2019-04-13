@extends('layout')

@section('title')
    Новая статья
@endsection

@section('content')
    <section class="mt-5">
        <h1>Создание новой статьи</h1>
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                <strong>При создании статьи возникли следующие ошибки:</strong>
                <ul class="mb-0">
                    @foreach ($errors->all() as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('article.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Заголовок</label>
                <input type="text"
                       class="form-control" name="title" id="title"
                       aria-describedby="titleHelp" placeholder="Lorem ipsum dolor sit amet."
                       value="{{ old('title') ?? $article->title ?? '' }}">
                <small id="helpId" class="form-text text-muted">Тут нужно указать красивый и завлекающий заголовок</small>
            </div>
            <div class="form-group">
                <label for="body">Текст статьи</label>
                <textarea class="form-control" name="body" id="body" rows="7">{{ old('body') ?? $article->body ?? '' }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
    </section>
@endsection