@extends('partials.layout')

@section('title')
    Новая статья
@endsection

@section('content')
    <section class="mt-5">
        <h1>Создание новой статьи</h1>
        @component('partials.errors')
            <strong>При создании статьи возникли следующие ошибки:</strong>
        @endcomponent
        <form action="{{ route('article.store') }}" method="POST">
            @csrf
            @include('article.form')
            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
    </section>
@endsection