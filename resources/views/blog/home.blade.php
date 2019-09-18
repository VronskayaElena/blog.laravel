@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="articles">
            <div class="row">
            @forelse($articles as $article)
                <div class="article col-lg-6 col-sm-12">
                    <div class="image"><img src="{{$article->image}}"></div>
                    <div class="title"><a href="{{route('article', $article->slug)}}">{{$article->title}}</a></div>
                    <div class="created_date">{{$article->created_at}}</div>
                    <div class="content">{!! $article->description_short !!}</div>
                </div>
            @empty
                <h2>Данные отсутствуют</h2>
            @endforelse
            </div>
            <div class="text-right">
                {{$articles->links()}}
            </div>
        </div>
    </div>
@endsection
