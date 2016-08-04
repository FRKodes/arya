@extends('app')

@section('current_section_title', 'Lorem ipsum dolor sit amet. Tempora, commodi, ipsam!')

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
		<div class="brand-logo living-concept"></div>
		<div class="brand-logo grupo-tunnich"></div>
		<div class="brand-logo grupo-guia"></div>
		<div class="brand-logo san-carlos"></div>
		<div class="brand-logo i-cc"></div>
		<div class="brand-logo tierra-armonia"></div>
		<div class="brand-logo anti-corp"></div>
	</div>

	<div class="container-fluid contacto text-center" id="contacto">
		<div class="container">
			<h2 class="azul2 mayus">Ponte en contacto</h2>
			<p>
				Montreal 1694 <br> Col. Italia Providencia. <br> Guadalajara, Jal.
			</p>
			<ul class="social">
				<li><a href="https://www.facebook.com/aryadesarrollos" target="_blank" class="icon-facebook"></a></li>
				<li><a href="#" target="_blank" class="icon-insta"></a></li>
			</ul>

			<div class="map" id="map"></div>

			{!! Form::open(['url'=>'sendmail', 'id'=>'contactForm']) !!}
				<div class="sent_mail_alert"><b>¡Gracias!</b> <br>Tu mensaje de envió exitosamente.</div>
				<div class="alert alert-danger hidden">Todos los campos son requeridos, verifica que el correo esté correcto.</div>

				<p class="text-center mayus blanco font14">Envíanos un mensaje</p>
				
				<div class="form-group">
					{!! Form::input('text', 'nombre', null, ['class'=>'form-control', 'placeholder'=>'Nombre', 'data-validate'=>'required']) !!}
				</div>

				<div class="form-group">
					{!! Form::input('text', 'correo', null, ['class'=>'form-control', 'placeholder'=>'Correo', 'data-validate'=>'required|email']) !!}
				</div>
				
				<div class="form-group">
					{!! Form::textarea('mensaje', null, ['class'=>'form-control', 'placeholder'=>'Mensaje', 'data-validate'=>'required']) !!}
				</div>


				<div class="form-group">
					{!! Form::submit('Enviar', ['class'=>'btn btn-primary']) !!}
				</div>
			{!! Form::close() !!}
			
		</div>
		<div class="container"><span class="icon-logo blanco"></span></div>
	</div>
	

@stop