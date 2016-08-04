function initMap() {
	var myLatLng = {lat: 20.703602, lng: -103.380431};
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 14,
		scrollwheel: false,
		center: myLatLng
	});

	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map,
		animation: google.maps.Animation.DROP,
		title: 'ARYA'
	});

	var contentString = '<div id="content">'+
	      '<div id="siteNotice">'+
	      '</div>'+
	      '<h3 id="firstHeading" class="firstHeading">ARYA</h3>'+
	      '<div id="bodyContent">'+
	      '<p>Te llevamos de la mano a contstruir tus sueños.</p>'+
	      '<p>Correo: <a href="mailto:info@arya.com.mx">info@arya.com.mx</a></p>'+
	      '<p>Teléfono: (33) 3817 6602</p>'+
	      '</div>'+
	      '</div>';

	  var infowindow = new google.maps.InfoWindow({
	    content: contentString
	  });

	  marker.addListener('click', function() {
	    infowindow.open(map, marker);
	  });
}

$(function(){
	var formSettings = {
		singleError : function($field, rules){ $field.closest('.form-group').removeClass('valid').addClass('error'); $('.alert.alert-danger').removeClass('hidden');},
		singleSuccess : function($field, rules){ $field.closest('.form-group').removeClass('error').addClass('valid'); $('.alert.alert-danger').addClass('hidden');},
		overallSuccess : function(){

			var form    	= $('#contactForm'),
				nombre   	= form.find( "input[name='nombre']" ).val(),
				correo		= form.find( "input[name='correo']" ).val(),
				mensaje		= form.find( "textarea[name='mensaje']" ).val(),
				_token   	= form.find( "input[name='_token']" ).val(),
				action  	= form.attr( "action"),
				url     	= action;
			var posting = $.post( 
				url, { 	nombre: nombre, 
						correo: correo, 
						mensaje: mensaje, 
						_token: _token
					}
				);
			posting.done(function( data ) {
				console.log('email sent!');
				$('#contactForm')[0].reset();
				$('.sent_mail_alert').fadeIn().delay(2000).fadeOut();
			});

		},
		overallError : function($form, fields){ /*Do nothing, just show the error fields*/ },
		autoDetect : true, debug : true
	};
	var $validate = $('#contactForm').validate(formSettings).data('validate');
});

(function(){
	$(".navbar-nav li a, .link-to-contact").on('click',function() {
		
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


		$('.finished-carousel').slick(
			{
				'autoplay': true,
				'fade': true,
				'dots': true,
				'adaptiveHeight': true,
				'speed': 500,
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

		var ele = document.body;
		var current_height = 0;
		$( window ).scroll(function() {
			
			current_height = ele.scrollTop;

			if (ele.scrollTop >= como_hacemos-900) { 
				$('.col-sm-6.phrase').addClass('magictime').addClass('slideLeftRetourn');
				$('.col-sm-6.features').addClass('magictime').addClass('slideRightRetourn');
			};

			if (ele.scrollTop >= en_venta-900) { 
				$('.en-venta').addClass('magictime').addClass('puffIn');
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
