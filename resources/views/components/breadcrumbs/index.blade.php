<div class="breadcrumb">
    @if ($simple)
        <ul>
            <li><a href="{{route('home')}}">Главная</a></li>
            <li>{{ $pagename }}</li>
        </ul>    
    @else
        <ul>
            <li><a href="{{route('home')}}">Главная</a></li>
            @if (!empty($catnames["cat4"]))
                <li><a href="{{route('category', $catnames["cat4"]->slug)}}">{{$catnames["cat4"]->name}}</a></li>
            @endif

            @if (!empty($catnames["cat3"]))
                <li><a href="{{route('category', $catnames["cat3"]->slug)}}">{{$catnames["cat3"]->name}}</a></li>
            @endif

            @if (!empty($catnames["cat2"]))
                <li><a href="{{route('category', $catnames["cat2"]->slug)}}">{{$catnames["cat2"]->name}}</a></li>
            @endif

            @if (!empty($catnames["cat1"]))
                <li><a href="{{route('category', $catnames["cat1"]->slug)}}">{{$catnames["cat1"]->name}}</a></li>
            @endif
            <li>{{ $pagename }}</li>
        </ul>    
    @endif 

</div>