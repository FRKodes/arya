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
		
		// console.log('Position: ' + quienes);

	});

	setTimeout(function(){
	    $('.top-content').addClass('magictime puffIn');
	}, 100);

	setInterval(function(){ 
	    $('span.arrow.icon-flecha').toggleClass('magictime swashIn');
	}, 1000 );
}());
