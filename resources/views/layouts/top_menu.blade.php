@foreach($categories as $category)

    @if($category->children->where('published', 1)->count())
    <li class="dropdown">
        <div class="btn-group">
            <a href="{{url("/blog/category/$category->slug")}}" class="btn btn-secondary">
            {{$category->title}}

            </a>
            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" role="button" aria-expanded="false">
                <span class="caret"></span>
            </button>

            <ul class="dropdown-menu" role="menu">
                @include('layouts.top_menu', ['categories' => $category->children])
            </ul>
        </div>
    @else
        <li>
            <a href="{{url("/blog/category/$category->slug")}}">{{$category->title}}</a>
    @endif
    </li>
@endforeach