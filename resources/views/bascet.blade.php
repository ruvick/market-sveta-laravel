@extends('layout.all')

@php
$page_title = "Корзина";
@endphp

@section('title', $page_title)

@section('content')

    <section id="bascet_page" class="select-prod">
        <div class="_container">
            
            <x-breadcrumbs :pagename="$page_title" :simple="true"></x-breadcrumbs>

            <h1>{{$page_title}}</h1>
            
            <bascet></bascet>

        </div>
    </section>

   
@endsection