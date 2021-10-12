/*Product details page js*/

/*Product slider js*/
$(document).ready(function() {
	$('.product-slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.product-slider-nav'
		});
	$('.product-slider-nav').slick({
		vertical: true,
		slidesToShow: 8,
		slidesToScroll: 1,
		asNavFor: '.product-slider-for',
		dots: false,
		centerMode: true,
		focusOnSelect: true,
	});
	// Remove active class from all thumbnail slides
	$('.product-slider-nav .slick-slide').removeClass('slick-active');

	// Set active class to first thumbnail slides
	$('.product-slider-nav .slick-slide').eq(0).addClass('slick-active');

	// On before slide change match active thumbnail to current slide
	$('.videos-slider-2').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
		var mySlideNumber = nextSlide;
		$('.product-slider-nav .slick-slide').removeClass('slick-active');
		$('.product-slider-nav .slick-slide').eq(mySlideNumber).addClass('slick-active');
	});

	/* Wear It With slider */
	$('.wear-it-With-slider').slick({
	  dots: false,
	  infinite: false,
	  speed: 300,
	  slidesToShow: 5,
	  slidesToScroll: 5,
	});
	$('.item-bought-slider').slick({
		dots: false,
		infinite: false,
		speed: 300,
		slidesToShow: 5,
		slidesToScroll: 5,
	});
	$('.similar-items-slider').slick({
		dots: false,
		infinite: false,
		speed: 300,
		slidesToShow: 6,
		slidesToScroll: 6,
	});
	$('.recently-viewed-slider').slick({
		dots: false,
		infinite: false,
		speed: 300,
		slidesToShow: 6,
		slidesToScroll: 6,
	});
});