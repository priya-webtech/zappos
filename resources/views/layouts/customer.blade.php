<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Shoes, Sneaker, Clothes &amp; Clothing') }}</title>
    @livewireStyles
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/styles/my-login.css') }}">

    <!---Slick Carousel--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>

    <!-- Bootstrap CSS 	-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <!---------Link font Awsome---------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ URL::asset('/js/font.js') }}"></script>

    <!-----Link CSS------>
    <link href="{{ URL::asset('/styles/header.css') }}" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ URL::asset('/styles/customresponsive.css') }}">

    <!-----Custom-css-->
    <link rel="stylesheet" href="{{ URL::asset('/styles/mainpage.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/mansory.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" integrity="sha512-Cv93isQdFwaKBV+Z4X8kaVBYWHST58Xb/jVOcV9aRsGSArZsgAnFIhMpDoMDcFNoUtday1hdjn0nGp3+KZyyFw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

{{--        <link rel="stylesheet" type="text/css" href="slick/slick.css" />--}}
{{--        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />--}}
<!-- Scripts -->
    <script src="{{ URL::asset('js/app.js') }}" defer></script>
</head>
<body>
<div class="container-fluid m-0 p-0">
    <div class="first-container"></div>
    <!-- Page Heading -->
    <livewire:header/>

    <!------------Navbar-------------------------->
    <div class="container-fluid bg-light">
        <livewire:navigation/>
    </div>
</div>

<!-- Page Heading -->
@if (isset($header))
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>
@endif


<!-- Page Content -->
<main>
    {{ $slot }}
</main>
<livewire:footer/>

@livewireScripts
</body>
</html>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        item = 1;
        $('.item-plus').on('click', function () {
            item++;
            $(this).parent().parent().find('.total-item').text(item);
        });
        $('.item-minus').on('click', function () {
            if (item > 0) {
                item--;
            }
            $(this).parent().parent().find('.total-item').text(item);
        });


        $('#drop-down-div,#cs-close').on('click', function () {
            $('.drop-down-container').toggleClass('drop-down-anim');
            $('#drop-btn').toggleClass('rotate');
        });

        $('header .header-mid .my-cart button').mouseover(function () {
            $('header .header-mid .my-cart button .cart-img').css('transform', 'scale(1.1)');
        });

        $('header .header-mid .my-cart button').mouseout(function () {
            $('header .header-mid .my-cart button .cart-img').css('transform', 'scale(1)');
        });

        $('#searched-input').on('click', function () {
            $('#autofill').toggle();
        });
        /*Items in Cart*/
        cartItems = 1;
        $('#mycart-btn').on('click', function () {
            if (cartItems > 0) {
                if ($('body').width() > 910) {
                    $('header .header-mid #my-cart button #cartItems').text(cartItems + " ITEM IN CART");
                    $('header .header-mid #my-cart button #cartItems').addClass('clearContent');
                }
            }
        });
        /*Background fill if cart items is greater than 0*/
        $('body').each(function () {
            if (cartItems > 0) {
                $('#mycart-btn').addClass('bg-cart');
            } else {
                $('#mycart-btn').removeClass('bg-cart');
            }
        });
        /*End of Items in Cart*/

        /*Media Query for mycart*/
        function myFunction(x) {
            if (x.matches) {
                $('header .header-mid .my-cart button #cartItems').text("");
                $('header .header-mid .my-cart button #cartItems').removeClass('clearContent');
            } else {
                if (cartItems > 0) {
                    $('header .header-mid .my-cart button #cartItems').text(cartItems + " ITEM IN CART");
                    $('header .header-mid .my-cart button #cartItems').addClass('clearContent');
                    $(this).addClass('bg-cart');
                }
            }
        }

        var x = window.matchMedia("(max-width: 910px)")
        myFunction(x)
        x.addListener(myFunction);


        /*** Dont Remove it will update heart color when its span has liked class**/
        $('.heart').each(function () {
            heart = $(this);
            if (heart.hasClass("liked")) {
                heart.html('<i class="fas fa-heart" aria-hidden="true"></i>');
            } else {
                heart.html('<i class="far fa-heart" aria-hidden="true"></i>');
            }
        });
        /*Heart Clicked*/
        $(".move-heart-button").click(function () {
            heart = $(this).find('.heart');
            if (heart.hasClass("liked")) {
                heart.html('<i class="far fa-heart" aria-hidden="true"></i>');
                heart.removeClass("liked");
            } else {
                heart.html('<i class="fas fa-heart" aria-hidden="true"></i>');
                heart.addClass("liked");
            }
        });
        /****/

        $('.signin-btn').on('click', function () {
            $('.sign-in-form').show();
            $('.first-container').show();
            $('#proceed-cart').hide();
        });

        $('.turn-btn,.first-container,.turn-cross').on('click', function () {
            $('body').toggleClass("pause-page");
            $(this).siblings('.turn-child').toggle();
            if ($('.first-container').is(":visible")) {
                $('.turn-child').hide();
            }

            $('.first-container').toggle();
        });


    });
    /* ---------background black------------*/

</script>


<script>
    $(document).ready(function () {
        $(".wish-icon i").click(function () {
            $(this).toggleClass("fa-heart fa-heart-o");
        });
    });
</script>
<!--FOOTER OF THE WEB -->
<style>
    footer {
        font-family: 'Open Sans';
    }

    footer h3 {
        color: white;
        font-size: 20px;
    }

    footer h6 {
        color: white;
    }

    footer p {
        color: white;
    }

    footer a {
        color: white;
        font-size: 15px;
    }

    footer #newsletter {
        background-color: #003953;
        border: 2px solid white;
        color: white;
    }

    footer #newsletter:hover {
        background-color: white;
        color: black;
        transition: 0.5s;
    }

    footer #btn-ouline-nl {
        background-color: #003953;
        border: 2px solid white;
        color: white;
        border: 2px solid #003953 !important
    }

    footer #btn-ouline-nl:hover {
        background-color: black;
        color: white;
        transition: 0.5s;
        border: 2px solid black !important
    }

    footer ul li {
        line-height: 1.3rem;
    }

    footer ul li a:hover, .footer-copyright a {
        color: white;
    }

    footer ul li a {
        color: white;
        font-size: 14px;
    }
</style>

