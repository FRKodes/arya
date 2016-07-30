(function(){
	$(".navbar-nav li a").on('click',function() {
		var element = $(this).attr('data-href').slice(1);
	    $('html, body').animate({
	        scrollTop: $("#" + element).offset().top-40
	    }, 700);
	    $(".navbar-nav li").removeClass('active');
	    $(this).parent().addClass('active');
	});

	$('.dropdown-menu a').on('click', function (){
		var item = $(this).attr('data-open');
		$('.nav-tabs li').removeClass('active');
		$('.nav-tabs li.' + item).addClass('active');
		$('.tab-pane').removeClass('active').removeClass('in');
		$('#' + item).addClass('active').addClass('in');
	});

	$(document).ready(function(){
		$('.main-banner').slick(
			{
				'autoplay': true,
				'fade': true,
				'speed': 2500,
				'autoplaySpeed': 5000
			}
		);

		var quienes = $("#que-hacemos").offset().top;
		var como_hacemos = $("#como-lo-hacemos").offset().top;
		var en_venta = $("#en-venta").offset().top;
		var post_venta = $("#post-venta").offset().top;
		var ventajas = $("#ventajas").offset().top;
		var socios = $("#socios-comerciales").offset().top;
		var contacto = $("#contacto").offset().top;
		
		// console.log('Position quienes: ' + quienes + '\n');
		console.log('Position como lo hacemos: ' + como_hacemos + '\n');
		// console.log('Position en venta: ' + en_venta + '\n');
		// console.log('Position post venta: ' + post_venta + '\n');
		// console.log('Position ventajas: ' + ventajas + '\n');
		// console.log('Position socios: ' + socios + '\n');
		// console.log('Position contacto: ' + contacto + '\n');

		var ele = document.body;
		var current_height = 0;
		$( window ).scroll(function() {
			
			// console.log(ele.scrollTop);
			current_height = ele.scrollTop;
			console.log(current_height);

			if (ele.scrollTop >= como_hacemos-900) { 
				$('.col-sm-6.phrase').addClass('magictime').addClass('slideLeftRetourn');
				$('.col-sm-6.features').addClass('magictime').addClass('slideRightRetourn');
			};

			if (ele.scrollTop >= en_venta-900) { 
				$('.en-venta .col-md-7 img').addClass('magictime').addClass('puffIn');
			};

			if (ele.scrollTop >= ventajas-900) { 
				$('#ventajas .image').addClass('magictime').addClass('slideRightRetourn');
				$('#ventajas .back-blue-md').addClass('magictime').addClass('puffIn');

			};


		});


	});

	setTimeout(function(){
	    $('.top-content').addClass('magictime puffIn');
	}, 100);

	setInterval(function(){ 
	    $('span.arrow.icon-flecha').toggleClass('magictime swashIn');
	}, 1000 );
}());
