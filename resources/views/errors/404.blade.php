@extends('layout.all')
@section('title', "Ой! А тут что то ничего нет! - MarketSveta")

@section('content')

    <section id="select-prod" class="select-prod">
        <div class="_container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{route('home')}}">Главная</a></li>
                    <li>404</li>
                </ul>
            </div>

            <h1>404</h1>
        </div>
    </section>

@endsection