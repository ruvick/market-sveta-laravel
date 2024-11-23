@extends('layout.all')
@section('title', "Категория")

@section('content')

    <section id="category_page" class="select-prod">
        <div class="_container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{route('home')}}">Главная</a></li>
                    <li>{{$category->name}}</li>
                </ul>
            </div>

            <h1>{{$category->name}}</h1>

            <div class="page__body d-flex">

                {{-- <x-category-sidebar></x-category-sidebar> --}}

                {{-- @livewire('category-filter', ['sub_cat' => $sub_cat, 'cat_id' => $category->baseid, 'cat_name'=>$category->name, 'cat_url'=> url()->current()]) --}}
                
                <div id="sb_app">                
                    <category-filter 
                        home-rout="{{ route('home') }}" 
                        cat-list="{{$sub_cat->toJson()}}" 
                        cat-url="{{url()->current()}}" 
                        cat-name="{{$category->name}}" 
                        cat-id="{{$category->baseid}}" 
                    ></category-filter>
                </div>
                
                <main class="page__main main">

                    <x-subcat-slider :subcat="$sub_cat"></x-subcat-slider>

                    <div class="page__main-banner banner">

                    </div>

                    <div class="main-prod-card d-flex">
                        @foreach ($cat_product as $item)
                            <x-tovar-card :minfo="$item"></x-tovar-card>    
                        @endforeach
                    </div>

                    <!-- <div class="show-link">
                        <a href="#" class="show-link__btn">Показать еще</a>
                    </div> -->


                    {{$cat_product->links('parts.pagination');}}
                </main>

            </div>
        </div>
    </section>

@endsection