<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	{{-- <link rel="stylesheet" href="{{asset('css/style.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/filter.style.css')}}"> --}}
	<link rel="icon" type="image/png" href="{{asset('img/favicons/icon256.png')}}" sizes="256x256">
	<link rel="icon" type="image/png" href="{{asset('img/favicons/icon128.png')}}" sizes="128x128">
	<link rel="icon" type="image/png" href="{{asset('img/favicons/icon64.png')}}" sizes="64x64">
	<link rel="icon" type="image/png" href="{{asset('img/favicons/icon32.png')}}" sizes="32x32">
	<link rel="icon" type="image/png" href="{{asset('img/favicons/icon16.png')}}" sizes="16x16">
	<link rel="icon" type="image/png" href="{{asset('img/favicons/icon.svg')}}" sizes="any">
	<link rel="shortcut icon" href="favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="_token" content="{{ csrf_token() }}">
	
	@vite(["resources/css/app.css",
			"resources/js/app.js", 
			"resources/js/lib/lib.js", 
			"public/css/style.min.css", 
			"public/css/interface.css", 
			"public/css/filter.style.css",
			"public/css/mainsearch.css",
			"public/css/bascet.css"
			])
</head>