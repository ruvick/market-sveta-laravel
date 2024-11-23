<!DOCTYPE html>
<html lang="ru">
    @include('parts.head')

	@livewireStyles
<body>
	<div class="wrapper" id = "app">
		@include('parts.header_index')
		<main class="page">
            
            @yield('content');

		</main>
		@include('parts.footer')
	</div>
	@include('parts.popup')
	@include('parts.js')
	@livewireScripts
</body>

</html>