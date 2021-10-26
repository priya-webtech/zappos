/*********************************
			Jasmin Js
*********************************/
$(document).ready(function() {
    $('.customer-service-btn').click(function() {
        $('.customer-service-dropdown').slideToggle("fast");
        $(this).toggleClass("up-arrow");
    });
    $('.cs-close-btn').click(function() {
        $('.customer-service-dropdown').slideUp("fast");
        $('.customer-service-btn').removeClass("up-arrow");
    });
});

// Oty plus minus js

$(document).ready(function() {
	$(document).on('click', '.qty-plus', function () {
	   $(this).prev().val(+$(this).prev().val() + 1);
	});
	$(document).on('click', '.qty-minus', function () {
	   if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
	});
});

$('.cat-title').click(function(e) {
    // e.preventDefault();
    // $('.cat-sidebar-list').removeClass('open-cat');
    $(this).parent().toggleClass('open-cat');
});
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


// login & Resgister form js
$(document).ready(function() {
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});

	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});

});

$(document).ready(function(){
	$('.my-cart .bg-cart').click(function(){
		$('body').addClass('cart-overlay');
	});
	$('.myclose-close').click(function(){
		$('body').removeClass('cart-overlay');
	});	
});


// href click smooth scoll js
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});