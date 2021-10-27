<x-customer-layout>
        <!-- banner start -->
        <div class="banner">        
            <img src="{{ url('assets/main.gif') }}">
        </div>
        <!-- banner end -->

        <!-- home category section start -->
        <div class="home-category-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 home-cat-box">
                        <figure><img src="https://m.media-amazon.com/images/G/01/2020/homepage12.7/HOMEPAGE-TRIPTYCH-WOMENS-COATS-OUTERWEAR-500x500_1.jpg"></figure>
                        <h4 class="h4">Cozy at Home: Clothing Favourites</h4>
                        <p>Super-soft pieces that look and feel amazing!</p>
                        <a href="#" class="site-link-btn">Shop Cozy Clothing <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-4 home-cat-box">
                        <figure><img src="https://m.media-amazon.com/images/G/01/2020/homepage12.7/HOMEPAGE-TRIPTYCH-KIDS-COATS-OUTERWEAR-500x500.jpg"></figure>
                        <h4 class="h4">Cozy at Home: Clothing Favourites</h4>
                        <p>Super-soft pieces that look and feel amazing!</p>
                        <a href="#" class="site-link-btn">Shop Cozy Clothing <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-4 home-cat-box">
                        <figure><img src="https://m.media-amazon.com/images/G/01/2020/homepage12.7/HOMEPAGE-TRIPTYCH-MENS-COATS-OUTERWEAR-500x500.jpg"></figure>
                        <h4 class="h4">Cozy at Home: Clothing Favourites</h4>
                        <p>Super-soft pieces that look and feel amazing!</p>
                        <a href="#" class="site-link-btn">Shop Cozy Clothing <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- home second section end -->

        <!-- home left container section start-->
        <div class="left-container-sec half-container-sec">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 half-container">
                        <h2 class="h2">The Cozy Shop</h2>
                        <p>Supremely cozy looks for all your plan(or not-plans) - because around-the-clock cozy is the name of our game.</p>
                        <a href="#" class="site-btn">Peak Cozy Right This Way</a>
                    </div>
                    <div class="col-md-8 full-container">
                        <div class="full-container-img">
                            <figure><img src="../assets/women3.jpg"></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- home left container section end -->

        <!-- home right container section start-->
        <div class="right-container-sec half-container-sec">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 full-container">
                        <div class="full-container-img">
                            <figure><img src="https://m.media-amazon.com/images/G/01/2020/style-room/HOMEPAGE-THE-STYLE-ROOM-ADIDAS-STELLA-MCCARTNEY-DECEMBER-965x500.jpg"></figure>
                        </div>
                    </div>
                    <div class="col-md-4 half-container">
                        <h2 class="h2">The Cozy Shop</h2>
                        <p>Supremely cozy looks for all your plan(or not-plans) - because around-the-clock cozy is the name of our game.</p>
                        <a href="#" class="site-btn">Peak Cozy Right This Way</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- home left container section end -->

        <!-- Home Product section start -->
        <div class="home-product-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 home-pd-col">
                        <h2 class="h2">UGG® for Her: Impeccable Style, Cozy Comfort</h2>
                        <a href="#" class="site-btn">shop women's ugg®</a>
                        <img src="https://m.media-amazon.com/images/G/01/2020/homepage12.14/500x740_LLBean.jpg">
                    </div>
                    <div class="col-md-8 home-pd-col">
                        <div class="cat-product-section">
                            <div class="row">
                                @foreach($this->Product as $result)
                                <div class="col-md-4 cat-pd-col">
                                    <div class="cat-pd-img">
                                        @if($result['productmediaget'] && isset($result['productmediaget'][0]))
                                        <a href="{{ route('product-front-detail', $result->seo_utl) }}">
                                            <img src="{{ asset('storage/'.$result['productmediaget'][0]['image']) }}">
                                        </a>
                                        @endif

                                        <!-- Wish-list code -->
                                        @php
                                        $favresult = favorite($result->id);
                                        @endphp
                                        @if(!empty($favresult))
                                         <a class="cat-wishlist-btn wishlist-pd wish-list {{$favresult['class']}}" wire:click="UpdateWish({{$favresult['id']}}, {{$favresult['product_id']}})"><i class="fa fa-heart-o" aria-hidden="true"></i> <?php echo count($result['favoriteget']); ?></a>
                                        @endif 
                                        <!-- Wish-list code ends -->
                                        
                                    </div>
                                    <div class="cat-pd-content">
                                        <a href="#">
                                            <h6 class="h6">{{$result->title}}</h6>
                                            <p>Slipper Socks</p>
                                        </a>
                                        <p class="product-price">
                                            <span class="mrp-price">${{round($result->price, 2)}}</span>
                                            <span class="msrp-price">MSRP: ${{round($result->compare_price, 2)}}</span>
                                        </p>
                                        <div class="cat-pd-review">
                                            <p class="review-gold"><i class="fa fa-star" aria-hidden="true"></i></p>
                                            <p class="review-gold"><i class="fa fa-star" aria-hidden="true"></i></p>
                                            <p class="review-gold"><i class="fa fa-star" aria-hidden="true"></i></p>
                                            <p class="review-gold"><i class="fa fa-star" aria-hidden="true"></i></p>
                                            <p><i class="fa fa-star" aria-hidden="true"></i></p>
                                            <span>(595)</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Product section end -->

        <!-- home mini banner start -->
        <div class="home-mini-banner">
            <div class="row">
                <div class="col-md-5">
                    <div class="mini-banner-content">
                        <h2 class="h2">Earn a Total of 5% Back at Zappos</h2>
                        <p>Automatically earn a total of 5% Back on all Zappos purchases when using your Amazon Rewards Visa card.*</p>
                        <a href="#" class="site-btn">Learn more</a>
                    </div>
                </div>
                <div class="col-md-7">
                </div>
            </div>
        </div>
        <!-- home mini banner end -->

        <!-- home category section start -->
        <div class="home-category-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 home-cat-box">
                        <figure><img src="https://m.media-amazon.com/images/G/01/zopus2020v/tony/TonyHsieh-500x500.jpg"></figure>
                        <h4 class="h4">Cozy at Home: Clothing Favourites</h4>
                        <p>Super-soft pieces that look and feel amazing!</p>
                        <a href="#" class="site-link-btn">Shop Cozy Clothing <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-4 home-cat-box">
                        <figure><img src="https://m.media-amazon.com/images/G/01/zappos/landing/opus/2020/homepage/july/NCR-01.svg"></figure>
                        <h4 class="h4">Cozy at Home: Clothing Favourites</h4>
                        <p>Super-soft pieces that look and feel amazing!</p>
                        <a href="#" class="site-link-btn">Shop Cozy Clothing <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-4 home-cat-box">
                        <figure><img src="https://m.media-amazon.com/images/G/01/zappos/landing/opus/2020/homepage/july/Inthistogether.jpg"></figure>
                        <h4 class="h4">Cozy at Home: Clothing Favourites</h4>
                        <p>Super-soft pieces that look and feel amazing!</p>
                        <a href="#" class="site-link-btn">Shop Cozy Clothing <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- home second section end -->
</x-customer-layout>
