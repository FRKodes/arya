<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.metas')
	@include('partials.styles')
</head>
<body class="@yield('body_page')">
	@include('partials.analytics')
	<header>
		@include('partials.nav')
	</header>
	
	<section>
		@yield('content')
	</section>
	
	<footer>
		@include('partials.footer')
	</footer>
	
	
	<script src="{{ elixir('js/all.min.js')}}"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEQaIE_qgDDf7Tuu7reM1-6b5HVUJg02s&amp;callback=initMap"></script>
</body>
</html>