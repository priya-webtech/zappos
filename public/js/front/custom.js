
/*********************************
			Jasmin Js
*********************************/

//set button id on click to hide first modal
$("#EditName, #ChangeEmail, #ChangePassword").on( "click", function() {
   	$('#LoginAndSecurity').modal('hide');  
   	$('body').addClass('modal-open2');  
});
$(".modal-close-btn").on( "click", function() {
	$('body').removeClass('modal-open2');  
});


// Seach bar outside click autofill close js

$('body').click(function (event) 
{
   if(!$(event.target).closest('#autofill').length && !$(event.target).is('#searched-input')) {
     $("#autofill").hide();
   }     
});


// category select tag slider js start

$(document).ready(function() {
var hidWidth;
var scrollBarWidths = 40;

var widthOfList = function(){
  var itemsWidth = 0;
  $('.tab-list li').each(function(){
    var itemWidth = $(this).outerWidth();
    itemsWidth+=itemWidth;
  });
  return itemsWidth;
};

var widthOfHidden = function(){
  return (($('.your-selections-inner').outerWidth())-widthOfList()-getLeftPosi())-scrollBarWidths;
};

var getLeftPosi = function(){
	if($('.tab-list').length > 0 ){
		return $('.tab-list').position().left;
	}
   
};

var reAdjust = function(){
  if (($('.your-selections-inner').outerWidth()) < widthOfList()) {
    $('.scroller-right').show();
  }
  else {
    $('.scroller-right').hide();
  }
  
  if (getLeftPosi()<0) {
    $('.scroller-left').show();
  }
}

reAdjust();

$(window).on('resize',function(e){  
  	reAdjust();
});

$('.scroller-right').click(function() {
  
  // $('.scroller-left').fadeIn('slow');
  // $('.scroller-right').fadeOut('slow');
  
  $('.tab-list').animate({left:"+="+widthOfHidden()+"px"},'slow',function(){

  });
});

$('.scroller-left').click(function() {
  
	// $('.scroller-right').fadeIn('slow');
	// $('.scroller-left').fadeOut('slow');
  
  	$('.tab-list').animate({left:"-="+getLeftPosi()+"px"},'slow',function(){
  	
  	});
});
});    

// category select tag slider js end


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



$('.cat-title').click(function(e) {
    // e.preventDefault();
    // $('.cat-sidebar-list').removeClass('open-cat');
    $(this).parent().toggleClass('open-cat');
});
/*Product details page js*/

/*Product slider js*/

function initializeSwiper() {
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
		arrows: true,
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
	$('.favorite-list-slider').slick({
		dots: false,
		infinite: false,
		speed: 300,
		slidesToShow: 6,
		slidesToScroll: 6,
	});
}
 $(window).on('load', function() {
	initializeSwiper();
});

window.addEventListener('onContentChanged', () => {
    initializeSwiper();
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


function initializeCart()
{
	$('.my-cart .bg-cart').click(function(){
		$('body').addClass('cart-overlay');
	});
	$('.myclose-close').click(function(){
		$('body').removeClass('cart-overlay');
	});	
}

window.addEventListener('onCartChanged', () => {
    initializeCart();
});
 $(window).on('load', function() {
	initializeCart();
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

           

