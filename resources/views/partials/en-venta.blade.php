<div id="en-venta"></div>

<div class="en-venta">
	<div class="container">
		
		<ul class="nav nav-tabs">
		  <li class="terminados active"><a data-toggle="tab" href="#terminados">Terminados</a></li>
		  {{-- <li class="en-proceso"><a data-toggle="tab" href="#en-proceso">En proceso</a></li> --}}
		  <li class="preventa"><a data-toggle="tab" href="#preventa">Preventa</a></li>
		</ul>
	</div>
	
	<div class="container-fluid back-gray-light">
		<div class="row">
			<div class="container">
				
				<div class="tab-content en-venta">
					<div id="terminados" class="tab-pane fade in active">
						
						<div class="col-sm-12"><h3>Terminados</h3></div>
						
						<div class="finished-carousel">
							@include('partials.en-venta-terminados')
						</div>
						
					</div>
					
					{{-- <div id="en-proceso" class="tab-pane fade">
						<div class="col-sm-12"><h3>En proceso</h3></div>

						<div class="process-carousel">
							@include('partials.en-venta-proceso')
						</div>

					</div> --}}
					
					<div id="preventa" class="tab-pane fade">
						<div class="col-sm-12"><h3>Preventa</h3></div>
						<div class="preventa-carousel">
							@include('partials.en-venta-preventa')
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>