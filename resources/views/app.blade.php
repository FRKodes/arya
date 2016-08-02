<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.metas')
	@include('partials.styles')
</head>
<body class="@yield('body_page')">
	<header>
		@include('partials.nav')
	</header>
	
	<section>
		@yield('content')
	</section>
	
	<footer>
		@include('partials.footer')
	</footer>
	
	{{-- @include('partials.analytics') --}}
	
	<script src="{{ elixir('js/all.min.js')}}"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9sZlZagIkv5aCb5da0Cbkj9iV49abzEM&amp;callback=initMap"></script>
</body>
</html>