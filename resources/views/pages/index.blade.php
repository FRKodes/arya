@extends('app')

@section('current_section_title', 'Lorem ipsum dolor sit amet. Tempora, commodi, ipsam!')

@section('content')
	<div class="main-banner-container">
		
		<div class="main-banner">
			<div class="item uno"></div>
		</div>
		
		<div class="top-content">
			<div class="logo"><img src="/images/logo_banner.png" alt="Logo ARYA"></div>
			<div class="slogan">Te llevamos de la mano<br>a contstruir tus sueños</div>
			<div class="call-to-action"><a href="#">LLÁMANOS</a></div>
			<div class="arrow-container"><span class="arrow icon-flecha"></span></div>
			<div class="banner-line"></div>
		</div>
		
	</div>

	<div class="container text-center first-block">
		<div class="container">
			<h1 class="azul2 main-phrase">La casa de tus sueños, donde siempre quisiste vivir.</h1>
			<p class="amarillo1">¿Qué esperas para conseguirla?</p>
			<p>Tu hogar ideal está más cerca de lo que alguna vez imaginaste...</p>
		</div>
	</div>

	<div class="container-fluid que-hacemos">
		<div class="container">
			<h2 class="text-center hidden-xs">¿Qué hacemos?</h2>
			<div class="col-sm-6 image"><img src="/images/familia.jpg" class="hidden-sm hidden-md hidden-lg" alt="Foto familia feliz"></div>
			<div class="col-sm-6">
				<h2 class="text-center hidden-sm hidden-md hidden-lg">¿Qué hacemos?</h2>
				<p>En ARYA, tenemos la casa de tus sueños o la hacemos a tu medida.</p>
				<p>Nos dedicamos a construir la casa para ti y tu familia.</p>
				<p>Te acompañamos de la mano desde el día uno.</p>
				<p>Nuestro trabajo no termina después de entregarte la casa.</p>
				<p>Tenemos casas para ti en los mejores fraccionamientos de la ZMG, con una amplia gama de prototipos.</p>
			</div>
		</div>
	</div>

	<div class="container-fluid patrimonio">

		<div class="container">
			
			<div class="col-sm-6 phrase">
				<h2 class="text-center">En ARYA te ayudamos a formar tu patrimonio</h2>
			</div>
			<div class="col-sm-6">
				<div class="line">
					<span class="number">1</span>
					<p class="block back-blue">¿Cuál es tu presupuesto?</p>
				</div>
				<div class="line">
					<span class="number">2</span>
					<p class="block back-yellow">¿Dónde quieres vivir?</p>
				</div>
				<div class="line">
					<span class="number">3</span>
					<p class="block back-gray">Definamos con nuestros asesores expertos cuáles son tus necesidades y las de tu familia</p>
				</div>
				<div class="line">
					<span class="number">4</span>
					<p class="block back-blue">Conseguimos tu crédito</p>
				</div>
				<div class="line">
					<span class="number">5</span>
					<p class="block back-yellow">Elejimos los acabados de tu casa</p>
				</div>
				<div class="line">
					<span class="number">6</span>
					<p class="block back-gray">La construimos</p>
				</div>
				<div class="line">
					<span class="number">7</span>
					<p class="block back-blue">Te entregamos tu casa</p>
				</div>
				<div class="line">
					<span class="number">8</span>
					<p class="block back-yellow">Contarás con nuestra Garantía ARYA</p>
				</div>
			</div>

		</div>

	</div>

	<div class="container-fluid post-venta">
		<div class="container">
			<h2 class="text-center hidden-xs">El mejor servicio post-venta</h2>
			<div class="col-sm-6 image"><img src="/images/post_venta.jpg" class="hidden-sm hidden-md hidden-lg" alt="El mejor servicio Post-venta"></div>
			<div class="col-sm-6">
				<h2 class="text-center hidden-sm hidden-md hidden-lg">El mejor servicio post-venta</h2>
				<p>ARYA DESARROLLOS, proyecta y hace realidad tu casa ideal, a tu medida y presupuesto, de una manera práctica y sencilla.</p>
				<p>Incorporando productos de la más alta calidad y mano de obra especializada.</p>
				<p>Sumado a prototipos a la vanguardia del mundoarquitectónico.</p>
			</div>
		</div>
	</div>

	<div class="en-venta">
		<div class="container">
			
			<ul class="nav nav-tabs">
			  <li class="active"><a data-toggle="tab" href="#terminados">Terminados</a></li>
			  <li><a data-toggle="tab" href="#en-proceso">En proceso</a></li>
			  <li><a data-toggle="tab" href="#preventa">Preventa</a></li>
			</ul>
		</div>
		
		<div class="container-fluid back-gray-light">
			<div class="row">
				<div class="container">
					
					<div class="tab-content en-venta">
						<div id="terminados" class="tab-pane fade in active">
							<div class="col-sm-12"><h3>Terminados</h3></div>
							<div class="col-sm-6 col-md-7">
								<img src="/images/proyectos.jpg" alt="proyectos">
							</div>
							<div class="col-sm-6 col-md-5">	
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto velit provident ipsum culpa fugiat eaque harum eius unde facere, assumenda, repellat nesciunt voluptatibus numquam cupiditate quibusdam, pariatur incidunt at ea!</p>
							</div>
						</div>
						<div id="en-proceso" class="tab-pane fade">
							<div class="col-sm-12"><h3>En proceso</h3></div>
							<div class="col-sm-6 col-md-7">
								<img src="/images/livingroom.jpg" alt="en proceso">
							</div>
							<div class="col-sm-6 col-md-5">	
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto velit provident ipsum culpa fugiat eaque harum eius unde facere, assumenda, repellat nesciunt voluptatibus numquam cupiditate quibusdam, pariatur incidunt at ea!</p>
							</div>
						</div>
						<div id="preventa" class="tab-pane fade">
							<div class="col-sm-12"><h3>Preventa</h3></div>
							<div class="col-sm-6 col-md-7">
								<img src="/images/banner_principal-01.jpg" alt="preventa">
							</div>
							<div class="col-sm-6 col-md-5">	
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto velit provident ipsum culpa fugiat eaque harum eius unde facere, assumenda, repellat nesciunt voluptatibus numquam cupiditate quibusdam, pariatur incidunt at ea!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid ventajas">
		<div class="col-sm-6 image"></div>
		<div class="col-sm-6 back-blue-md">
			<h2 class="text-center amarillo1">Ventajas de trabajar con nosotros</h2>
			<div class="line"><span class="icon-triangulo amarillo1"></span><p class="inline-block">Arquitectura contemporánea</p></div>
			<div class="line"><span class="icon-triangulo amarillo1"></span><p class="inline-block">Altos estándares de construcción</p></div>
			<div class="line"><span class="icon-triangulo amarillo1"></span><p class="inline-block">Amplia gama de prototipos para elegir</p></div>
			<div class="line"><span class="icon-triangulo amarillo1"></span><p class="inline-block">Las mejores ubicaciones de la ciudad Fraccionamientos de gran plusvalía</p></div>
			<div class="line"><span class="icon-triangulo amarillo1"></span><p class="inline-block">Apoyo para conseguir tu crédito fácilmente Elección de acabados a tu gusto Satisfacción garantizada</p></div>
			<div class="line"><span class="icon-triangulo amarillo1"></span><p class="inline-block">Proyecto personalizado</p></div>
		</div>
	</div>
	
	<div class="container text-center">
		<div class="line-yellow go-up"></div>
		<h2 class="amarillo1 land-option">Si cuentas con el terreno, te apoyamos en el desarrollo y consolidación de tu Proyecto</h2>
		<div class="line-yellow"></div>
	</div>

	<div class="container aliados text-center">
		<h2 class="azul2">Aliados comerciales</h2>	
		<div class="brand-logo aceros-ocotlan"></div>
		<div class="brand-logo living-concept"></div>
		<div class="brand-logo grupo-tunnich"></div>
		<div class="brand-logo grupo-guia"></div>
		<div class="brand-logo san-carlos"></div>
		<div class="brand-logo i-cc"></div>
		<div class="brand-logo tierra-armonia"></div>
		<div class="brand-logo arbol-verde"></div>
		<div class="brand-logo anti-corp"></div>
	</div>

	<div class="container-fluid contacto text-center">
		<h2 class="azul2">Ponte en contacto</h2>
		<p>
			Av. Empresarios 135 Piso 7D <br> Col. Puerta de HIerro. Zapopan, Jal.
		</p>
		<ul class="social">
			<li><a href="#" class="icon-facebook"></a></li>
			<li><a href="#" class="icon-insta"></a></li>
		</ul>

		<div class="map"></div>

		<form action="#">
			<p class="text-center blanco font14">Envíanos un mensaje</p>
			<div class="form-group">
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
			</div>
			<div class="form-group">
				<button class="btn btn-primary">Enviar</button>
			</div>		
		</form>
		
		<div class="container"><span class="icon-logo blanco"></span></div>
	</div>
	

@stop