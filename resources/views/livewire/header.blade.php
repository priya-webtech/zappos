<div>
    <div class="main-heder" wire:ignore>
        <div class="first-container"></div>
        <header class="text-white" name="header" id="header">
            <div class="header-top" name='header-top' id="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center">
                            <div class="left-header align-items-center d-flex">
                                <div id="left-header-btn" name="left-header-btn">
                                    <div class="customer-service d-flex">
                                        <div id="drop-down-div" class="d-flex">
                                            <p>
                                                Customer Service
                                            </h1>
                                            <i class="fa fa-sort-down drop-down" id="drop-btn"></i>
                                        </div>
                                    </div>
                                    <div class="drop-down-container bg-white text-dark p-0">
                                        <div class="menu-container pb-2">
                                            <div class="menu p-0" id="cs-close">
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>
                                        <ul class="m-0">
                                            <a href="#">
                                                <li>Contact Info</li>
                                            </a>
                                            <a href="#">
                                                <li>FAQ</li>
                                            </a>
                                            <a href="#">
                                                <li>Give your Feedback</li>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                                <div class="contact-time d-flex">
                                    <p>
                                        Available 24/7 at &nbsp;
                                    </p>
                                    <span class="contact-number">(800) 92<span class="t7">7</span>-<span class="t7">7</span>6<span class="t7">7</span>1</span>
                                </div>
                            </div>
                            <div class="header-info ml-auto pb-0 pt-0">
                                <p>
                                    <span class="bold">Earn a total of 5% Back</span> with your Amazon
                                    Rewards Visa Card! Learn More
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="header-mid" wire:ignore>
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center">
                            <div class="logo">
                                <a href="#"><img src="../assets/ZAPPOS-HOLIDAY-HEADER-LOGO.gif"></a>
                            </div>
                            <div class="search-box ml-auto">
                                <form class="search-container d-flex align-items-center" method="get" target="_parent" action="">
                                    <input class="form" type="text" placeholder="Search for shoes, clothes, etc." name="searched-input" id="searched-input">
                                    <div class="header-search-icon"><i class="fa fa-search" aria-hidden="true"></i></div>
                                </form>
                                <div class="col-12 text-dark p-0 auto-fill" id="autofill" style="display: none">
                                    <div class="ml-md-2 border bg-white rounded-bottom pb-1">
                                        <div class=" p-1 pl-3 m-0 pr-3 link-fill"><button class="link-fill">cases</button></div>
                                        <div class=" p-1 pl-3 m-0 pr-3 link-fill"><button class="link-fill">iphone cases</button></div>
                                        <div class=" p-1 pl-3 m-0 pr-3 link-fill"><button class="link-fill">samsung cases</button></div>
                                        <div class=" p-1 pl-3 m-0 pr-3 link-fill"><button class="link-fill">winter sweaters</button></div>
                                        <div class=" p-1 pl-3 m-0 pr-3 link-fill"><button class="link-fill">Trousers</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-cart turn-btn" id="my-cart">
                                <button class=" bg-cart" onclick="document.getElementById('proceed-cart').style.display='block'">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span id="cartItems" class="clearContent">{{count($CartItem)}} ITEM IN CART</span>
                                </button>
                            </div>
                            <form method="post" action="{{ route('add-order') }}" name="form">
                             @csrf
                            <div class="proceed-cart" id="proceed-cart">
                                <div class="proceed-cart-head">
                                    <h4 class="h4">My Cart</h4>
                                    <a class="myclose-close" onclick="document.getElementById('proceed-cart').style.display='none'">
                                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                            <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="row cart-vip-code" name="cart-vip-code">
                                    <div class="col-12">
                                        <p class="vip-text"><img src="https://www.flaticon.com/svg/static/icons/svg/2909/2909599.svg" class="stars img-fluid"> Check out to earn Zappos VIP points worth up to <span class="font-weight-bold">$1.20</span> in VIP codes.</p>
                                    </div>
                                </div>
                                <div wire:ignore>
                                    <div>
                                        <div class="items" wire:ignore>
                                            <div class="col-12 p-0">
                                                @if($CartItem)
                                                <?php $price_sum  = 0; ?>
                                                @foreach($CartItem as $cart)
                                                <input name="cartid[]" type="hidden" id="deletecartid" value="{{$cart->id}}">
                                                <div class="cart-list">
                                                    <div class="product-img">
                                                        <img src="{{ url('storage/'.$cart['media_product'][0]['image']) }}" alt="">
                                                    </div>
                                                    <div class="product-data">
                                                        <p>{{$cart['product_detail'][0]['title']}}</p>
                                                        <a href="#">Clare Tree</a>
                                                        <div class="product-data-inner">
                                                            @foreach($ProductVariant as $row)
                                                            @foreach($varianttag as $locrow)
                                                            @if($row->id == $cart->varientid)

                                                            @if($row->varient1 == $locrow->id && $row->attribute1 != "")
                                                            <p>{{$locrow->name}}: {{$row->attribute1}}</p>
                                                            @endif

                                                            @if($row->varient2 == $locrow->id && $row->attribute2 != "")
                                                            <p>{{$locrow->name}}: {{$row->attribute2}}</p>
                                                            @endif

                                                            @if($row->varient3 == $locrow->id && $row->attribute3 != "")
                                                            <p>{{$locrow->name}}: {{$row->attribute3}}</p>
                                                            @endif

                                                            @if($row->varient4 == $locrow->id && $row->attribute4 != "")
                                                            <p>{{$locrow->name}}: {{$row->attribute4}}</p>
                                                            @endif

                                                            @if($row->varient5 == $locrow->id && $row->attribute5 != "")
                                                            <p>{{$locrow->name}}: {{$row->attribute1}}</p>
                                                            @endif

                                                            @if($row->varient6 == $locrow->id && $row->attribute5 != "")
                                                            <p>{{$locrow->name}}: {{$row->attribute5}}</p>
                                                            @endif

                                                            @if($row->varient7 == $locrow->id && $row->attribute6 != "")
                                                            <p>{{$locrow->name}}: {{$row->attribute6}}</p>
                                                            @endif

                                                            @if($row->varient8 == $locrow->id && $row->attribute7 != "")
                                                            <p>{{$locrow->name}}: {{$row->attribute7}}</p>
                                                            @endif

                                                            @if($row->varient9 == $locrow->id && $row->attribute8 != "")
                                                            <p>{{$locrow->name}}: {{$row->attribute9}}</p>
                                                            @endif

                                                            @if($row->varient10 == $locrow->id && $row->attribute10 != "")
                                                            <p>{{$locrow->name}}: {{$row->attribute10}}</p>
                                                            @endif

                                                            @endif
                                                            @endforeach
                                                            @endforeach
                                                            <div class="add-cart-select">
                                                               
                                                                <div class="total-item-select">
                                                                    <div class="input-plus-minus">
                                                                        <input type="button" value="-" class="qty-minus">
                                                                        <input name="stockitem[]" type="number" value="{{$cart->stock}}" class="stockqty" id="stockqtyitem" data-id="{{$cart->id}}">
                                                                        <input type="button" value="+" class="qty-plus">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="btn move-heart-button" name="r-heart-button">
                                                            Move To<i class="far fa-heart"></i>
                                                        </button>
                                                    </div>
                                                    <?php $price_sum  += ($cart->price * $cart->stock); ?>
                                                    <div class="cart-list-right">
                                                        <p class="greenish">${{round($cart->price,2)}}</p>
                                                        <p class="cart-msrp">MSRP: $220.00</p>
                                                        <a wire:ignore wire:click.prevent="DeleteCartProduct({{$cart->id}})" href="javascript:;">delete</a>
                                                    </div>
                                                </div>

                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-footer">
                                        <p>Cart Subtotal (<?php echo count($CartItem) ?> Items) ${{round($price_sum, 2)}}</p>
                                        <div class="cart-footer-btn">
                                            <button class="site-btn signin-btn">Sign In</button>
                                            <button class="site-btn view-cart-btn">View Cart</button>
                                            <input type="submit" name="checkout" class="site-btn checkout-btn" value="Proceed to checkout">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
            </section>
        </header>
        <!------------NAVBAR-------------------------->
        <div class="header-navbar container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                
<div class="collapse navbar-collapse" id="navbarSupportedContent">



    <ul class="navbar-nav mr-auto menu-ul">

        @foreach($menu_arr as $menu)

            <li class="nav-item dropdown f-bl">

                <a class="nav-link dropdown-toggle f-bl" href="#" id="navbarDropdown" role="button"

                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    {{$menu['name']}}

                </a>



                @if(count($menu['items']) > 0)

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <div class="masonry-with-columns">

                            @foreach($menu['items'] as $menuitem)

                                <div class="mansory-item">

                                    <div class="dropdown-header">{{$menuitem['label']}}</div>

                                    @if(isset($menuitem['items']))

                                        @foreach($menuitem['items'] as $item)

                                            <a class="dropdown-item" href="#">{{$item['label']}}</a>

                                        @endforeach

                                    @endif

                                </div>

                            @endforeach

                                @if(isset($menu['images']) && count($menu['images']) > 0)

                                    <div class="mansory-item">

                                        <div class="dropdown-header"></div>

                                        @foreach($menu['images'] as $menuimage)

                                            <aside>

                                                <a class="dropdown-item" href="#">

                                                    <img src="{{asset('storage/uploads/'.$menuimage['image'])}}"

                                                         alt="&quot;&quot;" height="175px"

                                                         width="175px">

                                                    <p> {{$menuimage['label']}}</p>

                                                </a>

                                            </aside>

                                        @endforeach

                                    </div>

                                @endif

                        </div>







                        {{-- <div class="d-md-flex align-items-start justify-content-start" >





                             @foreach($menu['items'] as $menuitem)

                                 <div>

                                     <div class="dropdown-header">{{$menuitem['label']}}</div>

                                     @if(isset($menuitem['items']))

                                         @foreach($menuitem['items'] as $item)

                                             <a class="dropdown-item" href="#">{{$item['label']}}</a>

                                         @endforeach

                                     @endif

                                 </div>

                             @endforeach

                             @if(isset($menu['images']) && count($menu['images']) > 0)

                                 <div class="vl"></div>

                                 <div>

                                     <div class="dropdown-header"></div>

                                     @foreach($menu['images'] as $menuimage)

                                         <aside>

                                             <a class="dropdown-item" href="#">

                                                 <img src="{{asset('storage/uploads/'.$menuimage['image'])}}"

                                                      alt="&quot;&quot;" height="175px"

                                                      width="175px">

                                                 <p> {{$menuimage['label']}}</p>

                                             </a>

                                         </aside>

                                     @endforeach

                                 </div>

                             @endif

                         </div>--}}

                    </div>

                @endif

            </li>

        @endforeach

    </ul>

</div>

@if (Route::has('login'))

    @auth

        @if(empty(Auth::User()->email_verified_at))

            <a href="#" class=" mr-3 turn-btn f-bl" name="login-btn" id="login-btn">Sign In / Register</a>

        @else

            <ul class="navbar-nav mr-auto">

                <li class="nav-item dropdown ">

                    <a class="nav-link dropdown-toggle f-bl" href="#" id="navbarDropdown" role="button"

                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}

                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="#">Your Profile</a>

                        <div class="dropdown-divider"></div>

                        <form method="POST" action="{{ route('logout') }}">

                            @csrf





                            <x-jet-dropdown-link href="{{ route('logout') }}"

                                                 onclick="event.preventDefault();

                                            this.closest('form').submit();">

                                {{ __('Log Out') }}

                            </x-jet-dropdown-link>

                        </form>

                    </div>

                </li>

            </ul>

        @endif

    @else

        <a href="#" class=" mr-3 turn-btn f-bl" name="login-btn" id="login-btn">Sign In / Register</a>

    @endauth

@endif



<section class="sign-in-form turn-child z-999 dis-none col-12 p-0 left position-absolute" id="sign-in-form"

         name="sign-in-form">

    <div class=" position-relative signin-inner m-auto">

        <div class="bg-white position-absolute">

            <div class="top d-flex align-items-center">

                <h3 class="login-heading p-2 pt-3 pl-3 s-22 f-24 f-bl">Sign-in</h3>

                <div class="cross-container turn-cross mr-4" id="login-close">

                    <span id="login-close" class="cross"></span>

                    <span id="login-close" class="cross"></span>

                </div>

            </div>

            <div class="middle row col-12 m-0 p-0">

                <div class="col-md-6 col-12 left order-md-0 order-1  mt-md-4 pt-md-3">



                    <a href="{{ route('login') }}">

                        <div class="col-md-11 ml-auto mr-auto  signin-item rounded mb-3 d-flex align-items-center">

                            <div class="platform zappos pt-1 ml-auto">

                                <img class="img-fluid" src="{{ URL::asset('/assets/zappos-iicon.svg')}}" alt="">

                            </div>

                            <p class="sign-options m-0 ml-1 mr-auto">SIGN IN WITH ZAPOOS</p>

                        </div>

                    </a>



                    <div class="col-md-11 ml-auto mr-auto  signin-item rounded mb-3 d-flex align-items-center">

                        <div class="platform amazon ml-auto">

                            <img class="img-fluid pt-2 mt-1"

                                 src="https://cdn.freebiesupply.com/images/large/2x/amazon-logo-transparent.png"

                                 alt="">

                        </div>

                        <p class="sign-options m-0 ml-2 mr-auto">SIGN IN WITH AMAZON</p>

                    </div>



                    <div class="col-md-11 ml-auto mr-auto  signin-item rounded mb-3 d-flex align-items-center">

                        <div class="platform google ml-auto">

                            <img class="img-fluid w-100 d-block pt-1 mt-1"

                                 src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-google-icon-logo-png-transparent-svg-vector-bie-supply-14.png"

                                 alt="">

                        </div>

                        <p class="sign-options m-0 ml-2 mr-auto">SIGN IN WITH GOOGLE</p>

                    </div>



                    <div class="d-flex m-auto col-12">

                        <span class="ml-auto m-3" style="width: 40%; height:0.13em; background: grey;"></span>

                        <p class="pl-4 pr-4">or</p>

                        <span class="mr-auto m-3" style="width: 40%; height: 0.13em; background: grey;"></span>

                    </div>



                    <a href="{{ route('register') }}">

                        <div class="col-md-11 ml-auto mr-auto  signin-item rounded mb-3 d-flex align-items-center">

                            <div class="platform zappos pt-1 ml-auto d-none">

                                <img class="img-fluid" src="{{ URL::asset('/assets/zappos-iicon.svg')}}" alt="">

                            </div>

                            <p class="sign-options m-0 ml-1 m-auto">CREATE YOUR ZAPOOS ACCOUNT</p>

                        </div>

                    </a>



                    <div class="col-8 terms mr-auto ml-auto mt-md-5 mt-4 text-center">

                        <p class="f-12 m-0">By signing in, you agree to Zappos</p>

                        <p class="f-12"><a href="#" class="f-12 underline hover-blue">Terms and Conditions</a> and

                            <a href="#" class="f-12 underline hover-blue">Privacy Policy</a>.</p>

                    </div>



                </div>

                <div class="col-md-6 col-12 right pl-md-5">

                    <h5 class="heading f-18 s-16 f-bl">

                        By logging in with Amazon, you may be eligible for additional Prime benefits like FREE

                        Upgraded Shipping. Then, join Zappos VIP for additional Prime-linked VIP perks:

                    </h5>

                    <ul>

                        <li>If you are an Amazon Prime Member, sign in with Amazon to qualify for free upgraded

                            shipping!

                        </li>

                        <li>Get FREE Expedited Shipping</li>

                        <div class="d-none d-md-block">

                            <li>Earn 2 Points for Every $1 Spent</li>

                            <li>Receive Bonus Points on Select Brands</li>

                            <li>Redeem Points for VIP Codes</li>

                        </div>

                    </ul>

                </div>

            </div>

        </div>

       </div>

     </section>
    </nav>
</div>
 
</div>
</div>



