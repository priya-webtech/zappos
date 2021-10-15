<div>
    <div class="main-heder" wire:ignore>
        <div class="first-container"></div>
        <header class="text-white" name="header" id="header">
            <div class="header-top" name='header-top' id="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center">
                            <div class="dropdown cs-drop-head" id="left-header-btn">
                                <button class="btn customer-service-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Customer Service </button>
                                <div class="dropdown-menu customer-service-dropdown" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="#">Contact Info</a></li>
                                    <li><a class="dropdown-item" href="#">FAQ</a></li>
                                    <li><a class="dropdown-item" href="#">Give your Feedback</a></li>
                                </div>      
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
                                <a href="#"><img src="{{ url('assets/zappos-logo.svg') }}"></a>
                            </div>
                            <div class="search-box" wire:ignore>
                                <form class="search-container d-flex align-items-center" method="get" target="_parent" action="" autocomplete="off">
                                    <input class="form" type="text" placeholder="Search for shoes, clothes, etc." wire:model="filter_product" id="searched-input">
                                    <div class="header-search-icon"><i class="fa fa-search" aria-hidden="true"></i></div>
                                </form>
                                <div class="col-12 text-dark p-0 auto-fill" id="autofill" style="display: none">
                                    <div class="border bg-white rounded-bottom pb-1">
                                        <div class=" p-1 pl-3 m-0 pr-3 link-fill"><button class="link-fill">cases</button></div>
                                        <div class=" p-1 pl-3 m-0 pr-3 link-fill"><button class="link-fill">iphone cases</button></div>
                                        <div class=" p-1 pl-3 m-0 pr-3 link-fill"><button class="link-fill">samsung cases</button></div>
                                        <div class=" p-1 pl-3 m-0 pr-3 link-fill"><button class="link-fill">winter sweaters</button></div>
                                        <div class=" p-1 pl-3 m-0 pr-3 link-fill"><button class="link-fill">Trousers</button></div>
                                        <div class="ml-md-2 border bg-white rounded-bottom pb-1"  wire:ignore>
                                            @foreach($getproduct as $row)
                                            <div class=" p-1 pl-3 m-0 pr-3 link-fill product-item"><a href="{{ route('product-front-detail', $row->seo_utl) }}"><button class="link-fill">{{$row->title}}</button></a></div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                            $cartCount = (!empty($CartItem)) ? count($CartItem) : 0;
                            ?>
                            <div class="my-cart turn-btn ml-auto" id="my-cart">
                                <button class=" bg-cart" onclick="document.getElementById('proceed-cart').style.display='block'">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.9 107.5" style="enable-background:new 0 0 122.9 107.5" xml:space="preserve"><g><path d="M3.9,7.9C1.8,7.9,0,6.1,0,3.9C0,1.8,1.8,0,3.9,0h10.2c0.1,0,0.3,0,0.4,0c3.6,0.1,6.8,0.8,9.5,2.5c3,1.9,5.2,4.8,6.4,9.1 c0,0.1,0,0.2,0.1,0.3l1,4H119c2.2,0,3.9,1.8,3.9,3.9c0,0.4-0.1,0.8-0.2,1.2l-10.2,41.1c-0.4,1.8-2,3-3.8,3v0H44.7 c1.4,5.2,2.8,8,4.7,9.3c2.3,1.5,6.3,1.6,13,1.5h0.1v0h45.2c2.2,0,3.9,1.8,3.9,3.9c0,2.2-1.8,3.9-3.9,3.9H62.5v0 c-8.3,0.1-13.4-0.1-17.5-2.8c-4.2-2.8-6.4-7.6-8.6-16.3l0,0L23,13.9c0-0.1,0-0.1-0.1-0.2c-0.6-2.2-1.6-3.7-3-4.5 c-1.4-0.9-3.3-1.3-5.5-1.3c-0.1,0-0.2,0-0.3,0H3.9L3.9,7.9z M96,88.3c5.3,0,9.6,4.3,9.6,9.6c0,5.3-4.3,9.6-9.6,9.6 c-5.3,0-9.6-4.3-9.6-9.6C86.4,92.6,90.7,88.3,96,88.3L96,88.3z M53.9,88.3c5.3,0,9.6,4.3,9.6,9.6c0,5.3-4.3,9.6-9.6,9.6 c-5.3,0-9.6-4.3-9.6-9.6C44.3,92.6,48.6,88.3,53.9,88.3L53.9,88.3z M33.7,23.7l8.9,33.5h63.1l8.3-33.5H33.7L33.7,23.7z"/></g></svg>
                                <span id="cartItems" class="clearContent">{{$cartCount}} My Cart</span>
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
                                    @if(!empty($CartItem) && count($CartItem) > 0)

                                    <div>
                                        <div class="items" wire:ignore>
                                            <div class="col-12 p-0">
                                                <?php $price_sum  = 0; ?>
                                                @foreach($CartItem as $cart)
                                                <input name="cartid[]" type="hidden" id="deletecartid" value="{{$cart->id}}">
                                                <div class="cart-list">
                                                    <div class="product-img">
                                                        <img src="{{ url('storage/'.$cart['media_product'][0]['image']) }}" alt="">
                                                    </div>
                                                    <div class="product-data">
                                                        <p class="cart-pd-title">{{$cart['product_detail'][0]['title']}}</p>
                                                        <a class="cart-pd-clear" href="#">Clare Tree</a>
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
                                                        <button class="btn move-heart-button wish-list" name="r-heart-button">
                                                            Move To<i class="fa fa-heart-o" aria-hidden="true"></i>
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
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-footer">
                                        <p>Cart Subtotal (<?php echo $cartCount ?> Items) ${{round($price_sum, 2)}}</p>
                                        <div class="cart-footer-btn">
                                            <button class="site-btn signin-btn">Sign In</button>
                                            <button class="site-btn view-cart-btn">View Cart</button>
                                            <input type="submit" name="checkout" class="site-btn checkout-btn" value="Proceed to checkout">
                                        </div>
                                    </div>
                                     @endif
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

                    <div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">

                        <div class="dropdown-menu-inner">

                            <div class="masonry-with-columns">

                                @foreach($menu['items'] as $menuitem)

                                    <div class="mansory-item">
                                    <a class="dropdown-header" href="{{ route('product-front-category', $menuitem['link']) }}">{{$menuitem['label']}}</a>

                                        <a class="dropdown-header" href="{{ route('product-front-category', $menuitem['label']) }}">{{$menuitem['label']}}</a>

                                        @if(isset($menuitem['items']))

                                            @foreach($menuitem['items'] as $item)

                                                <a class="dropdown-item" href="#">{{$item['label']}}</a>

                                            @endforeach

                                        @endif

                                        <ul class="dropdown-sub-list">
                                            <li>
                                                <a href="#">7 Utterly Wearable Fall ‘21 Trends</a>
                                            </li>
                                            <li>
                                                <a href="#">The SOREL Sneaker Shop</a>
                                            </li>
                                            <li>
                                                <a href="#">Denim For Every Body Style Finder</a>
                                            </li>
                                            <li>
                                                <a href="#">The Gender-Neutral Fall Edit</a>
                                            </li>
                                            <li>
                                                <a href="#">Fall Style For Every Size</a>
                                            </li>
                                            <li>
                                                <a href="#">The Ultimate Fall Boot Guide</a>
                                            </li>
                                            <li>
                                                <a href="#">Mix-and-Match Layering Pieces</a>
                                            </li>
                                            <li>
                                                <a href="#">‘90s Style Revivals Too Legit To Quit</a>
                                            </li>
                                            <li>
                                                <a href="#">The Find New Arrivals</a>
                                            </li>
                                        </ul>

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

                                            <ul class="dropdown-sub-list">
                                                <li>
                                                    <a href="#">7 Utterly Wearable Fall ‘21 Trends</a>
                                                </li>
                                                <li>
                                                    <a href="#">The SOREL Sneaker Shop</a>
                                                </li>
                                                <li>
                                                    <a href="#">Denim For Every Body Style Finder</a>
                                                </li>
                                                <li>
                                                    <a href="#">The Gender-Neutral Fall Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#">Fall Style For Every Size</a>
                                                </li>
                                                <li>
                                                    <a href="#">The Ultimate Fall Boot Guide</a>
                                                </li>
                                                <li>
                                                    <a href="#">Mix-and-Match Layering Pieces</a>
                                                </li>
                                                <li>
                                                    <a href="#">‘90s Style Revivals Too Legit To Quit</a>
                                                </li>
                                                <li>
                                                    <a href="#">The Find New Arrivals</a>
                                                </li>
                                            </ul>

                                        </div>

                                    @endif

                            </div>

                            <div class="masonry-with-columns">

                                @foreach($menu['items'] as $menuitem)

                                    <div class="mansory-item">

                                        <a class="dropdown-header" href="{{ route('product-front-category', $menuitem['label']) }}">{{$menuitem['label']}}</a>

                                        @if(isset($menuitem['items']))

                                            @foreach($menuitem['items'] as $item)

                                                <a class="dropdown-item" href="#">{{$item['label']}}</a>

                                            @endforeach

                                        @endif

                                        <ul class="dropdown-sub-list">
                                            <li>
                                                <a href="#">7 Utterly Wearable Fall ‘21 Trends</a>
                                            </li>
                                            <li>
                                                <a href="#">The SOREL Sneaker Shop</a>
                                            </li>
                                            <li>
                                                <a href="#">Denim For Every Body Style Finder</a>
                                            </li>
                                            <li>
                                                <a href="#">The Gender-Neutral Fall Edit</a>
                                            </li>
                                            <li>
                                                <a href="#">Fall Style For Every Size</a>
                                            </li>
                                            <li>
                                                <a href="#">The Ultimate Fall Boot Guide</a>
                                            </li>
                                            <li>
                                                <a href="#">Mix-and-Match Layering Pieces</a>
                                            </li>
                                            <li>
                                                <a href="#">‘90s Style Revivals Too Legit To Quit</a>
                                            </li>
                                            <li>
                                                <a href="#">The Find New Arrivals</a>
                                            </li>
                                        </ul>

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

                                            <ul class="dropdown-sub-list">
                                                <li>
                                                    <a href="#">7 Utterly Wearable Fall ‘21 Trends</a>
                                                </li>
                                                <li>
                                                    <a href="#">The SOREL Sneaker Shop</a>
                                                </li>
                                                <li>
                                                    <a href="#">Denim For Every Body Style Finder</a>
                                                </li>
                                                <li>
                                                    <a href="#">The Gender-Neutral Fall Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#">Fall Style For Every Size</a>
                                                </li>
                                                <li>
                                                    <a href="#">The Ultimate Fall Boot Guide</a>
                                                </li>
                                                <li>
                                                    <a href="#">Mix-and-Match Layering Pieces</a>
                                                </li>
                                                <li>
                                                    <a href="#">‘90s Style Revivals Too Legit To Quit</a>
                                                </li>
                                                <li>
                                                    <a href="#">The Find New Arrivals</a>
                                                </li>
                                            </ul>

                                        </div>

                                    @endif

                            </div>

                            <div class="masonry-with-columns">

                                @foreach($menu['items'] as $menuitem)

                                    <div class="mansory-item">

                                        <a class="dropdown-header" href="{{ route('product-front-category', $menuitem['label']) }}">{{$menuitem['label']}}</a>

                                        @if(isset($menuitem['items']))

                                            @foreach($menuitem['items'] as $item)

                                                <a class="dropdown-item" href="#">{{$item['label']}}</a>

                                            @endforeach

                                        @endif

                                        <ul class="dropdown-sub-list">
                                            <li>
                                                <a href="#">7 Utterly Wearable Fall ‘21 Trends</a>
                                            </li>
                                            <li>
                                                <a href="#">The SOREL Sneaker Shop</a>
                                            </li>
                                            <li>
                                                <a href="#">Denim For Every Body Style Finder</a>
                                            </li>
                                            <li>
                                                <a href="#">The Gender-Neutral Fall Edit</a>
                                            </li>
                                            <li>
                                                <a href="#">Fall Style For Every Size</a>
                                            </li>
                                            <li>
                                                <a href="#">The Ultimate Fall Boot Guide</a>
                                            </li>
                                            <li>
                                                <a href="#">Mix-and-Match Layering Pieces</a>
                                            </li>
                                            <li>
                                                <a href="#">‘90s Style Revivals Too Legit To Quit</a>
                                            </li>
                                            <li>
                                                <a href="#">The Find New Arrivals</a>
                                            </li>
                                        </ul>

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

                                            <ul class="dropdown-sub-list">
                                                <li>
                                                    <a href="#">7 Utterly Wearable Fall ‘21 Trends</a>
                                                </li>
                                                <li>
                                                    <a href="#">The SOREL Sneaker Shop</a>
                                                </li>
                                                <li>
                                                    <a href="#">Denim For Every Body Style Finder</a>
                                                </li>
                                                <li>
                                                    <a href="#">The Gender-Neutral Fall Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#">Fall Style For Every Size</a>
                                                </li>
                                                <li>
                                                    <a href="#">The Ultimate Fall Boot Guide</a>
                                                </li>
                                                <li>
                                                    <a href="#">Mix-and-Match Layering Pieces</a>
                                                </li>
                                                <li>
                                                    <a href="#">‘90s Style Revivals Too Legit To Quit</a>
                                                </li>
                                                <li>
                                                    <a href="#">The Find New Arrivals</a>
                                                </li>
                                            </ul>

                                        </div>

                                    @endif

                            </div>

                            <div class="masonry-with-columns">

                                @foreach($menu['items'] as $menuitem)

                                    <div class="mansory-item">

                                        <a class="dropdown-header" href="{{ route('product-front-category', $menuitem['label']) }}">{{$menuitem['label']}}</a>

                                        @if(isset($menuitem['items']))

                                            @foreach($menuitem['items'] as $item)

                                                <a class="dropdown-item" href="#">{{$item['label']}}</a>

                                            @endforeach

                                        @endif

                                        <ul class="dropdown-sub-list">
                                            <li>
                                                <a href="#">7 Utterly Wearable Fall ‘21 Trends</a>
                                            </li>
                                            <li>
                                                <a href="#">The SOREL Sneaker Shop</a>
                                            </li>
                                            <li>
                                                <a href="#">Denim For Every Body Style Finder</a>
                                            </li>
                                            <li>
                                                <a href="#">The Gender-Neutral Fall Edit</a>
                                            </li>
                                            <li>
                                                <a href="#">Fall Style For Every Size</a>
                                            </li>
                                            <li>
                                                <a href="#">The Ultimate Fall Boot Guide</a>
                                            </li>
                                            <li>
                                                <a href="#">Mix-and-Match Layering Pieces</a>
                                            </li>
                                            <li>
                                                <a href="#">‘90s Style Revivals Too Legit To Quit</a>
                                            </li>
                                            <li>
                                                <a href="#">The Find New Arrivals</a>
                                            </li>
                                        </ul>

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

                                            <ul class="dropdown-sub-list">
                                                <li>
                                                    <a href="#">7 Utterly Wearable Fall ‘21 Trends</a>
                                                </li>
                                                <li>
                                                    <a href="#">The SOREL Sneaker Shop</a>
                                                </li>
                                                <li>
                                                    <a href="#">Denim For Every Body Style Finder</a>
                                                </li>
                                                <li>
                                                    <a href="#">The Gender-Neutral Fall Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#">Fall Style For Every Size</a>
                                                </li>
                                                <li>
                                                    <a href="#">The Ultimate Fall Boot Guide</a>
                                                </li>
                                                <li>
                                                    <a href="#">Mix-and-Match Layering Pieces</a>
                                                </li>
                                                <li>
                                                    <a href="#">‘90s Style Revivals Too Legit To Quit</a>
                                                </li>
                                                <li>
                                                    <a href="#">The Find New Arrivals</a>
                                                </li>
                                            </ul>

                                        </div>

                                    @endif

                            </div>

                            <div class="masonry-with-columns">

                                @foreach($menu['items'] as $menuitem)

                                    <div class="mansory-item">

                                        <a class="dropdown-header" href="{{ route('product-front-category', $menuitem['label']) }}">{{$menuitem['label']}}</a>

                                        @if(isset($menuitem['items']))

                                            @foreach($menuitem['items'] as $item)

                                                <a class="dropdown-item" href="#">{{$item['label']}}</a>

                                            @endforeach

                                        @endif

                                        <ul class="dropdown-sub-list">
                                            <li>
                                                <a href="#">7 Utterly Wearable Fall ‘21 Trends</a>
                                            </li>
                                            <li>
                                                <a href="#">The SOREL Sneaker Shop</a>
                                            </li>
                                            <li>
                                                <a href="#">Denim For Every Body Style Finder</a>
                                            </li>
                                            <li>
                                                <a href="#">The Gender-Neutral Fall Edit</a>
                                            </li>
                                            <li>
                                                <a href="#">Fall Style For Every Size</a>
                                            </li>
                                            <li>
                                                <a href="#">The Ultimate Fall Boot Guide</a>
                                            </li>
                                            <li>
                                                <a href="#">Mix-and-Match Layering Pieces</a>
                                            </li>
                                            <li>
                                                <a href="#">‘90s Style Revivals Too Legit To Quit</a>
                                            </li>
                                            <li>
                                                <a href="#">The Find New Arrivals</a>
                                            </li>
                                        </ul>

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

                                            <ul class="dropdown-sub-list">
                                                <li>
                                                    <a href="#">7 Utterly Wearable Fall ‘21 Trends</a>
                                                </li>
                                                <li>
                                                    <a href="#">The SOREL Sneaker Shop</a>
                                                </li>
                                                <li>
                                                    <a href="#">Denim For Every Body Style Finder</a>
                                                </li>
                                                <li>
                                                    <a href="#">The Gender-Neutral Fall Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#">Fall Style For Every Size</a>
                                                </li>
                                                <li>
                                                    <a href="#">The Ultimate Fall Boot Guide</a>
                                                </li>
                                                <li>
                                                    <a href="#">Mix-and-Match Layering Pieces</a>
                                                </li>
                                                <li>
                                                    <a href="#">‘90s Style Revivals Too Legit To Quit</a>
                                                </li>
                                                <li>
                                                    <a href="#">The Find New Arrivals</a>
                                                </li>
                                            </ul>

                                        </div>

                                    @endif

                            </div>                            

                            <div class="masonry-with-columns">
                                <aside class="mega-menu-img">
                                    <a href="#">
                                        <img src="https://m.media-amazon.com/images/G/01/2021/Global-Nav/COOP-UGG-DISKETTE-GLOBAL-NAV-350x350.jpg">
                                        <p class="mg-img-text">Shop Women's UGG®</p>
                                    </a>
                                </aside>
                                <aside class="mega-menu-img">
                                    <a href="#">
                                        <img src="https://m.media-amazon.com/images/G/01/2021/Global-Nav/FREE-PEOPLE-BLOUSE-GLOBAL-NAV.jpg">
                                        <p class="mg-img-text">Shop Free People</p>
                                    </a>
                                </aside>
                            </div>

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

        <a href="#" class=" mr-3 turn-btn f-bl" name="login-btn" id="login-btn" onclick="document.getElementById('sign-in-form').style.display='block'">Sign In / Register</a>

    @endauth

@endif


    </nav>
</div>
 
</div>

<script type="text/javascript">
    $(document).ready(function(){
  $("#searched-input").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".product-item").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

$(document).ready(function(){
  $("#searched-input").on("keyup", function() {
  var x = document.getElementById('searched-input').value;
  var y = document.getElementById('product-item');
  if (x.length > 0) {
    y.style.display = 'block';
  } else {
    y.style.display = 'none';
  }
  });
});
</script>


    <!-- modal start -->
    <div class="site-modal" id="sign-in-form" name="sign-in-form">
        <div class="site-modal-main">
            <div class="site-modal-inner">
                <button class="signin-close-btn" onclick="document.getElementById('sign-in-form').style.display='none'">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </button>
                <div class="site-modal-middle">
                    <div class="container" id="container">
                        <div class="form-container sign-up-container">
                            <form action="#">
                                <h2 class="h2">Create Account</h2>
                                <span>or use your email for registration</span>
                                <input type="text" placeholder="Name" />
                                <input type="email" placeholder="Email" />
                                <input type="password" placeholder="Password" />
                                <input type="password" placeholder="Re-enter password " />
                                <button class="site-btn blue-btn">Sign Up</button>
                            </form>
                            <div class="signin-bottom-cont">
                                <p>By signing in, you agree to company name</p>
                                <p>
                                    <a href="#">Terms and Conditions</a>
                                    <span>and</span>
                                    <a href="#">Privacy Policy</a>
                                </p>
                            </div>
                        </div>
                        <div class="form-container sign-in-container">
                            <form action="#">
                                <h2 class="h2">Sign in</h2>
                                <span>or use your account</span>
                                <input type="email" placeholder="Email" />
                                <input type="password" placeholder="Password" />
                                <a href="#">Forgot your password?</a>
                                <button class="site-btn blue-btn">Sign In</button>
                            </form>
                            <div class="signin-bottom-cont">
                                <p>By signing in, you agree to company name</p>
                                <p>
                                    <a href="#">Terms and Conditions</a>
                                    <span>and</span>
                                    <a href="#">Privacy Policy</a>
                                </p>
                            </div>
                        </div>
                        <div class="overlay-container">
                            <div class="overlay">
                                <div class="overlay-panel overlay-left">
                                    <h2 class="h2">Welcome Back!</h2>
                                    <p>To keep connected with us please login with your personal info</p>
                                    <button class="ghost site-btn light-blue-btn" id="signIn">Sign In</button>
                                </div>
                                <div class="overlay-panel overlay-right">
                                    <h2 class="h2">Hello, Friend!</h2>
                                    <p>Enter your personal details and start journey with us</p>
                                    <button class="ghost site-btn light-blue-btn" id="signUp">Sign Up</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->

</div>


