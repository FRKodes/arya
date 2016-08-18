@extends('app')

@section('content')
	
	@include('partials.banners')

	<div class="container text-center first-block">
		<div class="container">
			<h1 class="azul2 main-phrase">La casa de tus sueños, donde siempre quisiste vivir.</h1>
			<p class="amarillo1">¿Qué esperas para conseguirla?</p>
			<p>Tu hogar ideal está más cerca de lo que alguna vez imaginaste...</p>
		</div>
	</div>

	
	@include('partials.quienes-somos')
	

	@include('partials.como-le-hacemos')
	
	
	@include('partials.en-venta')
	

	@include('partials.post-venta')

	
	@include('partials.ventajas')
	
	
	<div class="container text-center">
		<div class="line-yellow go-up"></div>
		<h2 class="amarillo1 land-option">Si cuentas con el terreno, te apoyamos en el desarrollo y consolidación de tu Proyecto</h2>
		<div class="line-yellow"></div>
	</div>

	<div class="container aliados text-center" id="socios-comerciales">
		<h2 class="azul2 mayus">Aliados comerciales</h2>	
		<div class="brand-logo aceros-ocotlan"></div>
		<div class="brand-logo grupo-tunnich"></div>
		<div class="brand-logo i-cc"></div>
		<div class="brand-logo anti-corp"></div>
	</div>

	@include('partials.contacto')
	

@stop