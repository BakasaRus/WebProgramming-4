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