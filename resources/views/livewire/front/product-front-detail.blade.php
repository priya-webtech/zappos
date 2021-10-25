<div :id="{{$product->id}}">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
<x-customer-layout>

    <div id="breadcrumb-container" name="breadcrumb-container" >
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-top-row" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item "><a href="{{ route('dashboard') }}" id="backLink">« Back</a></li>
                                <li class="breadcrumb-item "><a href="#">Shoes</a></li>
                                <li class="breadcrumb-item"><a href="#">Sneakers Athletic Shoes</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="#" id="product-brand" name="product-brand">ASICS</a>
                                </li>
                            </ol>
                            <p class="product-sku"> SKU 9399689</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-sec" wire:ignore>
            <div class="container">
                <div class="single-pd-sec">
                <div class="row">
                    <div class="col-md-8">
                        <div class="product-slider">
                            <div class="product-slider-nav">
                                @foreach($Productmedia as $image)

                                <div>
                                    <img src="{{ asset('storage/'.$image['image']) }}">
                                </div>
                                @endforeach
                            </div>

                            <div class="product-slider-for">
                                 @foreach($Productmedia as $image)
                                <div>
                                    <div class="single-pd-img">
                                        <img src="{{ asset('storage/'.$image['image']) }}">
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pd-sidebar-details">
                        <div class="product-rightbar">
                            <div class="product-title">
                                <h2 class="h2">
                                    <span class="product-brand">ASICS</span>
                                    <span class="product-title">{{$product->title}}</span>
                                </h2>
                                <div class="product-ratting">
                                    <i class="fa fa-star checked" aria-hidden="true"></i>
                                    <i class="fa fa-star checked" aria-hidden="true"></i>
                                    <i class="fa fa-star checked" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <a href="#" class="total-review">320 Reviews</a>
                                </div>
                            </div>
                            <div class="product-right-top">
                                <div class="pd-total">
                                    <h2 class="h2" id="getprice"><sup>$</sup><span>@if($Productvariant) ${{round($Productvariant->price,2)}} @else 145 @endif</span><sup>00</sup></h2>
                                    <label><form><i class="fa fa-truck" aria-hidden="true"></i>Ships Free!</label></form>
                                </div>
                               
                                <div class="pd-variation" :id="{{$product->id}}" wire:ignore>
                                    @if($product && isset($product->variants) && count($product->variants) > 0 )
                                     @foreach($product->variants as $row)
                                    <div class="form-group">
                                        @if(!empty($row->varient1))
                                        <div wire:ignore wire:key="first">

                                            <label>{{$varianttag[$row->varient1][0]['name']}}</label>
                                            <select name="attribute1"   class="form-control varition-change" id="varient1" wire:model="variant1" wire:key="first_sel" wire:ignore>

                                                @foreach($product->variants as $row)
                                                    @if($row->attribute1 != "")
                                                    <option wire:key="attr1_{{ $loop->index }}" wire:ignore.self>{{$row->attribute1}}</option> 
                                                    @endif 
                                                @endforeach
                                            </select>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                         @if(!empty($row->varient2))
                                        <div wire:ignore wire:key="second">
                                            <label>{{$varianttag[$row->varient2][0]['name']}}</label>
                                            <select name="attribute2"  class="form-control varition-change"   id="varient2" wire:model="variant2"  wire:key="sec_sel" wire:ignore>

                                                @foreach($product->variants as $row)
                                                    @if($row->attribute2 != "")
                                                    <option value="{{$row->attribute2}}" wire:key="attr2_{{ $loop->index }}" wire:ignore.self>{{$row->attribute2}}</option> 
                                                    @endif 
                                                @endforeach
                                            </select>
                                        </div>
                                        @endif

                                         @if(!empty($row->varient3))
                                        <div wire:ignore wire:key="third">
                                            <label>{{$varianttag[$row->varient3][0]['name']}}</label>
                                            <select name="attribute3"  wire:ignore.self class="form-control varition-change" id="varient3" wire:model="variant3" wire:key="third_sel" wire:ignore>

                                                @foreach($product->variants as $row)
                                                    @if($row->attribute3 != "")
                                                    <option value="" wire:key="attr3_{{ $loop->index }}" wire:ignore.self>{{$row->attribute3}}</option> 
                                                    @endif 
                                                @endforeach
                                            </select>
                                        </div>
                                        @endif
                                    </div>
                                    <?php break; ?>
                                    @endforeach
                                    @endif
                                    <div class="pd-width-options">
                                        <h5 class="h5">Width Options:</h5>
                                        <div class="form-check">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio1">S</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio2">xl</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pd-btn-group">
                                    <button class="site-btn" id="variant_id" wire:click="addCart($event.target.value)">Add to Cart</button>

                                    @if($favoritevalue && $favoritevalue->status == 1)
                                    <a class="site-btn add-collection-btn" wire:click="addFavorite" style="background-color: green;"><i class="fa fa-heart" aria-hidden="true"></i></i>Add to Favorite</a>
                                    @else
                                    <a class="site-btn add-collection-btn" wire:click="addFavorite"><i class="fa fa-heart" aria-hidden="true"></i></i>Add to Favorite</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                           
                        <div class="product-right-bottom">
                            <div class="size-and-social pd-right-p">
                                <!-- <a href="#">Don't See your size?</a>
                                <a href="#"> Notify Me of the New Styles</a> -->
                                <ul class="product-right-social">
                                    <li>Share:</li>
                                    <li><a class="pd-facebook" href="#">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </a></li>
                                    <li><a class="pd-twitter" href="#">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a></li>
                                    <li><a class="pd-pinterest" href="#">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a></li>
                                    <li><a class="pd-mail" href="#">
                                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                    </a></li>
                                </ul>
                            </div>
                            <div class="pd-sort-dec">
                                <h4 class="h4">Product Information</h4>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <a href="#pd-all-details">Show More Information <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="product-oneline-row">
                            <li>
                                <img src="https://www.zappos.com/marty-assets/sizeinfo.8c1cdd5ad8b9fe200f2ab76c77c7746c.svg">
                            </li>
                            <li><b>77%</b> True to Size</li>
                            <li><b>85%</b> Felt true to width</li>
                            <li><b>83%</b> Moderate arch support</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="wear-it-With-sec multi-item-slider">
                            <h3 class="h3">Wear It With</h3>
                            <div class="wear-it-With-slider">
                                <div>
                                    <img src="https://m.media-amazon.com/images/I/81aOMhB200L._AC_SX272_.jpg">
                                    <div class="multi-item-content">
                                        <a class="pd-add-cart" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add Item</a>
                                        <p>ASICS</p>
                                        <p class="multi-pd-title">GEL-Nimbus® 22</p>
                                        <p class="product-price"><span class="mrp-price">$99.95</span><span class="msrp-price">MSRP: $150.00</span></p>
                                    </div>
                                </div>
                                <div>
                                    <img src="https://m.media-amazon.com/images/I/71cpd1J29LL._AC_SX272_.jpg">
                                    <div class="multi-item-content">
                                        <a class="pd-add-cart" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add Item</a>
                                        <p>ASICS</p>
                                        <p class="multi-pd-title">GEL-Nimbus® 22</p>
                                        <p class="product-price"><span class="mrp-price">$99.95</span><span class="msrp-price">MSRP: $150.00</span></p>
                                    </div>
                                </div>
                                <div>
                                    <img src="https://m.media-amazon.com/images/I/81DnwjL9tBL._AC_SX272_.jpg">
                                    <div class="multi-item-content">
                                        <a class="pd-add-cart" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add Item</a>
                                        <p>ASICS</p>
                                        <p class="multi-pd-title">GEL-Nimbus® 22</p>
                                        <p class="product-price"><span class="mrp-price">$99.95</span><span class="msrp-price">MSRP: $150.00</span></p>
                                    </div>
                                </div>
                                <div>
                                    <img src="https://m.media-amazon.com/images/I/71YPVyvWFDL._AC_SX272_.jpg">
                                    <div class="multi-item-content">
                                        <a class="pd-add-cart" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add Item</a>
                                        <p>ASICS</p>
                                        <p class="multi-pd-title">GEL-Nimbus® 22</p>
                                        <p class="product-price"><span class="mrp-price">$99.95</span><span class="msrp-price">MSRP: $150.00</span></p>
                                    </div>
                                </div>
                                <div>
                                    <img src="https://m.media-amazon.com/images/I/71Gs5Cfb4hL._AC_SX272_.jpg">
                                    <div class="multi-item-content">
                                        <a class="pd-add-cart" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add Item</a>
                                        <p>ASICS</p>
                                        <p class="multi-pd-title">GEL-Nimbus® 22</p>
                                        <p class="product-price"><span class="mrp-price">$99.95</span><span class="msrp-price">MSRP: $150.00</span></p>
                                    </div>
                                </div>
                                <div>
                                    <img src="https://m.media-amazon.com/images/I/71Gs5Cfb4hL._AC_SX272_.jpg">
                                    <div class="multi-item-content">
                                        <a class="pd-add-cart" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add Item</a>
                                        <p>ASICS</p>
                                        <p class="multi-pd-title">GEL-Nimbus® 22</p>
                                        <p class="product-price"><span class="mrp-price">$99.95</span><span class="msrp-price">MSRP: $150.00</span></p>
                                    </div>
                                </div>
                                <div>
                                    <img src="https://m.media-amazon.com/images/I/71Gs5Cfb4hL._AC_SX272_.jpg">
                                    <div class="multi-item-content">
                                        <a class="pd-add-cart" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add Item</a>
                                        <p>ASICS</p>
                                        <p class="multi-pd-title">GEL-Nimbus® 22</p>
                                        <p class="product-price"><span class="mrp-price">$99.95</span><span class="msrp-price">MSRP: $150.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div id="pd-all-details" class="product-information">
                            <h3 class="h3">Item Information</h3>
                            <ul>
                                <li>View the size chart</li>
                                <li>Neutral runners will love the all-new minimalistic upper and even softer FLYTEFOAM® technology for an unbelievable fit and feel right out of the box and well into your 400th mile!</li>
                                <li>Predecessor: Gel-Cumulus 21.</li>
                                <li>Support Type: Neutral.</li>
                                <li>Surface: Road.</li>
                                <li>Differential: 10 mm.</li>
                                <li>Heel/Toe: 23 mm/13 mm.</li>
                                <li>View the size chart</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="item-bought-sec multi-item-slider">
                            <h3 class="h3">Customer Who Bought This Item Also Bought</h3>
                            <div class="item-bought-slider">
                                <div>
                                    <img src="https://m.media-amazon.com/images/I/81aOMhB200L._AC_SX272_.jpg">
                                    <div class="multi-item-content">
                                        <a class="wish-list add-wishlist" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 595</a>
                                        <p>ASICS</p>
                                        <p class="multi-pd-title">GEL-Nimbus® 22</p>
                                        <p class="product-price"><span class="mrp-price">$99.95</span><span class="msrp-price">MSRP: $150.00</span></p>
                                    </div>
                                </div>
                                <div>
                                    <img src="https://m.media-amazon.com/images/I/81aOMhB200L._AC_SX272_.jpg">
                                    <div class="multi-item-content">
                                        <a class="wish-list" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 595</a>
                                        <p>ASICS</p>
                                        <p class="multi-pd-title">GEL-Nimbus® 22</p>
                                        <p class="product-price"><span class="mrp-price">$99.95</span><span class="msrp-price">MSRP: $150.00</span></p>
                                    </div>
                                </div>
                                <div>
                                    <img src="https://m.media-amazon.com/images/I/81aOMhB200L._AC_SX272_.jpg">
                                    <div class="multi-item-content">
                                        <a class="wish-list" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 595</a>
                                        <p>ASICS</p>
                                        <p class="multi-pd-title">GEL-Nimbus® 22</p>
                                        <p class="product-price"><span class="mrp-price">$99.95</span><span class="msrp-price">MSRP: $150.00</span></p>
                                    </div>
                                </div>
                                <div>
                                    <img src="https://m.media-amazon.com/images/I/81aOMhB200L._AC_SX272_.jpg">
                                    <div class="multi-item-content">
                                        <a class="wish-list" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 595</a>
                                        <p>ASICS</p>
                                        <p class="multi-pd-title">GEL-Nimbus® 22</p>
                                        <p class="product-price"><span class="mrp-price">$99.95</span><span class="msrp-price">MSRP: $150.00</span></p>
                                    </div>
                                </div>
                                <div>
                                    <img src="https://m.media-amazon.com/images/I/81aOMhB200L._AC_SX272_.jpg">
                                    <div class="multi-item-content">
                                        <a class="wish-list" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 595</a>
                                        <p>ASICS</p>
                                        <p class="multi-pd-title">GEL-Nimbus® 22</p>
                                        <p class="product-price"><span class="mrp-price">$99.95</span><span class="msrp-price">MSRP: $150.00</span></p>
                                    </div>
                                </div>
                                <div>
                                    <img src="https://m.media-amazon.com/images/I/81aOMhB200L._AC_SX272_.jpg">
                                    <div class="multi-item-content">
                                        <a class="wish-list" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 595</a>
                                        <p>ASICS</p>
                                        <p class="multi-pd-title">GEL-Nimbus® 22</p>
                                        <p class="product-price"><span class="mrp-price">$99.95</span><span class="msrp-price">MSRP: $150.00</span></p>
                                    </div>
                                </div>
                                <div>
                                    <img src="https://m.media-amazon.com/images/I/81aOMhB200L._AC_SX272_.jpg">
                                    <div class="multi-item-content">
                                        <a class="wish-list" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 595</a>
                                        <p>ASICS</p>
                                        <p class="multi-pd-title">GEL-Nimbus® 22</p>
                                        <p class="product-price"><span class="mrp-price">$99.95</span><span class="msrp-price">MSRP: $150.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="similar-items-sec multi-item-slider">
                            <h3 class="h3">Recommended For You</h3>
                            <div class="similar-items-slider">
                                @foreach($productrelated as $rows)
                                <?php $decodeA = json_decode($rows->collection);  
                                      $decodeB = json_decode($product->collection); 
                                ?>
                                @if(!empty($decodeA))
                                @foreach($decodeA as $decoderes)
                                @if(is_array($decodeB) && !empty($decodeB))
                                @if(in_array($decoderes, $decodeB) && $product->id != $rows->id)

                                <div>
                                    @if($rows['productmediaget'] && isset($rows['productmediaget'][0]))
                                    <img src="{{ asset('storage/'.$rows['productmediaget'][0]['image']) }}">
                                    @endif
                                
                                    <div class="multi-item-content">
                                        @php
                                        $result = favorite($rows->id);
                                        @endphp

                                        @if(!empty($result))
                                        <a class="wish-list {{$result['class']}}" wire:click="UpdateWish({{$result['id']}}, {{$result['product_id']}})"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        @endif
                                        <p>ASICS</p>
                                        <p class="multi-pd-title">{{$rows->title}}</p>
                                        <p class="product-price"><span class="mrp-price">${{round($rows->price)}}</span><span class="msrp-price">MSRP: $150.00</span></p>
                                    </div>
                                </div>
                                @endif
                                @endif
                                @endforeach
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="free-shipping-return">
                            <h3 class="h3">Free Shipping and Free Return</h3>
                            <p>If, for any reason, you are unsatisfied with your purchase from Zappos.com LLC you may return it in its original condition within 365 days for a refund. We'll even pay for return shipping!</p>
                            <a href="#">Learn more about our free shipping and free returns policy</a>
                        </div>
                        <div class="recently-viewed-sec multi-item-slider">
                            <h3 class="h3">Your Recently Viewed Items</h3>
                            <div class="recently-viewed-slider">
                                @if(Cookie::get('shopping_cart'))
                                <?php $cookieitem = json_decode(Cookie::get('shopping_cart')); ?>
                                @foreach($productrelated as $pro_res)
                                @foreach($cookieitem as $result)
                                @if($pro_res['productmediaget'] && isset($pro_res['productmediaget'][0]))
                                <div>
                                    <img src="{{ asset('storage/'.$pro_res['productmediaget'][0]['image']) }}">
                                    <div class="multi-item-content">
                                        @php
                                        $result = favorite($pro_res->id);
                                        @endphp

                                        @if(!empty($result))
                                        <a class="wish-list {{$result['class']}}" wire:click="UpdateWish({{$result['id']}}, {{$result['product_id']}})"><i class="fa fa-heart-o" aria-hidden="true"></i> </a>
                                        @endif
                                        <p>{{$pro_res->title}}</p>
                                        <p class="multi-pd-title">GEL-Nimbus® 22</p>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <a class="site-btn" href="{{ route('product-review', $product->id) }}">Write Review</a>
            </div>
        </div>
   
    <script type="text/javascript">
         
        $(function(){
            $(document).on("change", ".varition-change", function () {
                var val1 = $('#varient1').val();
                var val2 = $('#varient2').val();
                var val3 = $('#varient3').val();
                $.ajax({
                    type: 'GET',
                    url: "{{URL('varientData')}}",
                    data: { text1: val1, text2: val2, text3: val3},
                    success: function(response) {
                        var price = stock = 0;
                        var id = null;
                        if(response.variant != null) 
                        {
                             price = response.variant.price;
                             stock = response.variant.variant_stock[0].stock;
                             id = response.variant.id;
                        }
                        
                        $('#getprice').html('$'+price);
                        $('#getstock').html(stock);
                        $('#getpriceinput').attr('value',price);
                        $('#variant_id').prop('value',id);
                    }
                });
            });
        })

    </script>
</x-customer-layout>
</div>


