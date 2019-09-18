@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Список пользователей @endslot
            @slot('parent') Главная @endslot
            @slot('active') Пользователи @endslot
        @endcomponent

        <hr/>

        <h1>Загрузить изображение</h1>
        <form action="{{ route('image.upload') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <input type="file" id="image" name="image">
            </div>
            <button class="btn btn-default" type="submit">Загрузить</button>
        </form>

        <hr/>

        @isset ($path)
            <img class="img-fluid" width="300px" src="{{ asset('/storage/app/public/' . $path) }}" alt="">
        @endisset
        <hr/>
        Здесь будут изображения
        <hr/>
    </div>
@endsection