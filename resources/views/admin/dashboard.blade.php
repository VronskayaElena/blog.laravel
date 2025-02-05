@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="text-center jumbotron">
                    <p><span class="label label-primary">Категорий {{$count_categories}}</span></p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="text-center jumbotron">
                    <p><span class="label label-primary">Новостей {{$count_articles}}</span></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <a href="{{route('admin.category.create')}}" class="btn btn-block btn-default">Создать категорию</a>
                @foreach ($categories as $category)
                <a href="{{route('admin.category.edit', $category)}}" class="list-group-item">
                    <h4 class="list-group-item-heading">{{$category->title}}</h4>
                    <p class="list-group-item-text">
                        {{$category->articles()->count()}}
                    </p>
                </a>
                @endforeach
            </div>
            <div class="col-sm-6">
                <a href="{{route('admin.article.create')}}" class="btn btn-block btn-default">Создать новость</a>
                @foreach ($articles as $article)
                <a href="{{route('admin.article.edit', $article)}}" class="list-group-item">
                    <h4 class="list-group-item-heading">{{$article->title}}</h4>
                    <p class="list-group-item-text">
                        {{$article->categories()->pluck('title')->implode(', ')}}
                    </p>
                </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection