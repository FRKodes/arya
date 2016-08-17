<div class="container-fluid contacto text-center" id="contacto">
	<div class="container">
		<h2 class="azul2 mayus">Ponte en contacto</h2>
		<p>
			Montreal 1694 <br> Col. Italia Providencia. <br> Guadalajara, Jal.
		</p>
		<ul class="social">
			<li><a href="https://www.facebook.com/aryadesarrollos" target="_blank" class="icon-facebook"></a></li>
			<li><a href="https://www.instagram.com/aryadesarrollos" target="_blank" class="icon-insta"></a></li>
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