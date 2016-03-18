var ImgBodega = 'img-bodega-1';

$(document).ready(function() {

	// Abrir/Cerra menu mobile

	$('#trigger-menu').click(function() {

		$('#expand-menu').slideToggle();

	});

	/* Funciones Tamaños y Precios */

	$('.thumbnail').each(function(){

		ThisSelected = $(this).attr('data-selected');

		if(ThisSelected == 'active'){

			ThisSelectedImgBodega = $(this).attr('data-img-bodega');

			$('.cycle-slideshow').cycle('goto', (ThisSelectedImgBodega.replace('img-bodega-','') - 1));

			$(this).css({'background':'#2964db', 'color':'#fff'});

			$('#' + ThisSelectedImgBodega).css('max-height','25.4rem');

		};

	});

	$('.thumbnail').off('click')

	$('.thumbnail').on('click', function(){	

		ThisImgBodega = $(this).attr('data-img-bodega');

		$('.cycle-slideshow').cycle('goto', (ThisImgBodega.replace('img-bodega-','') - 1));		

		$('.img-bodega').css('max-height','0rem');

		$('.thumbnail').css({'background':'#f1f2f3', 'color':'#3e4349'});

		if (ImgBodega == ThisImgBodega && window.innerWidth < 768){

			$(this).css({'background':'#f1f2f3', 'color':'#3e4349'});

			$('#' + ThisImgBodega).css('max-height','0rem');

			ImgBodega = '';

		}
		else{

			$(this).css({'background':'#2964db', 'color':'#fff'});

			$('#' + ThisImgBodega).css('max-height','25.4rem');

			ImgBodega = ThisImgBodega;

		};

	});

	$('.cycle-slideshow').on('cycle-next',function(){

		SlideActual = $('.cycle-slideshow').data("cycle.opts").currSlide;

		$('.thumbnail').css({'background':'#f1f2f3', 'color':'#3e4349'});

		$('.img-bodega').css('max-height','0rem');

		$('#img-bodega-' + (SlideActual + 1)).css('max-height','25.4rem');

		$('div[data-img-bodega=img-bodega-' + (SlideActual + 1) +']').css({'background':'#2964db', 'color':'#fff'});

	});

	$('.cycle-slideshow').on('cycle-prev',function(){

		SlideActual = $('.cycle-slideshow').data("cycle.opts").currSlide;

		$('.thumbnail').css({'background':'#f1f2f3', 'color':'#3e4349'});

		$('.img-bodega').css('max-height','0rem');

		$('#img-bodega-' + (SlideActual + 1)).css('max-height','25.4rem');

		$('div[data-img-bodega=img-bodega-' + (SlideActual + 1) +']').css({'background':'#2964db', 'color':'#fff'});

	});

	$(window).resize(function(){

		Location = window.location.pathname;

		if (Location == '/tamanos-y-precios/'){

			SlideActual = $('.cycle-slideshow').data("cycle.opts").currSlide;

				

			$('.thumbnail').css({'background':'#f1f2f3', 'color':'#3e4349'});

			$('.img-bodega').css('max-height','0rem');

			$('#img-bodega-' + (SlideActual + 1)).css('max-height','25.4rem');

			$('div[data-img-bodega=img-bodega-' + (SlideActual + 1) +']').css({'background':'#2964db', 'color':'#fff'});

			ImgBodega = 'img-bodega-' + (SlideActual + 1);

		};

	});

	/* Funciones Instalaciones y servicios */

	$('.servicios-mostrar').off('click');

	$('.servicios-mostrar').on('click', function(){

		$('.servicios-oculto').fadeToggle();

	});

	if(window.innerWidth < 768){

		$('.servicios-oculto').fadeOut();

	};

	$(window).resize(function(){

		if(window.innerWidth < 768){

			$('.servicios-oculto').fadeOut();

		}
		else{

			$('.servicios-oculto').fadeIn();

		};

	});

	/* Funciones FAQ */

	$('.pregunta-respuesta').hide();

	$('.pregunta-titulo').click( function(){

		$(this).next().slideToggle();

		$(this).children('span').text(function(i, text){

			return text === "+" ? "-" : "+";

		});

	});

});