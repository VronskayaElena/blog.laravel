<label for="">Статус</label>
<select name="published" class="form-control">
    @if (isset($article->id))
        <option value="0" @if ($article->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if ($article->published == 1) selected="" @endif>Опубликовано</option>
    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>

<label for="">Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок новости" value="{{$article->title or ""}}" required>

<label for="">Slug (уникальное значение)</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{$article->slug or ""}}" readonly="">

<label for="">Родительская категория</label>
<select name="categories[]" class="form-control">
    @include('admin.articles.partials.categories', ['categories' => $categories])
</select>

<label for="">Краткое описание</label>
<textarea class="form-control" name="description_short" id="description_short" cols="30" rows="10">{{$article->description_short or ""}}</textarea>

<label for="">Полное описание</label>
<textarea class="form-control" name="description" id="description" cols="30" rows="10">{{$article->description or ""}}</textarea>

<hr />

<label for="">Мета заголовок</label>
<input class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{$article->meta_title or ""}}">

<label for="">Мета описание</label>
<input class="form-control" name="meta_description" placeholder="Мета описание" value="{{$article->meta_description or ""}}">

<label for="">Мета слова</label>
<input class="form-control" name="meta_keyword" placeholder="Мета слова" value="{{$article->meta_keyword or ""}}">

<hr />

<input type="submit" class="btn btn-primary" value="Сохранить">

<hr />