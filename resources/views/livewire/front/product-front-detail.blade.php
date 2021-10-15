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
                <div class="row">
                    <div class="col-md-9">
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
                        <ul class="product-oneline-row">
                            <li>
                                <img src="https://www.zappos.com/marty-assets/sizeinfo.8c1cdd5ad8b9fe200f2ab76c77c7746c.svg">
                            </li>
                            <li><b>77%</b> True to Size</li>
                            <li><b>85%</b> Felt true to width</li>
                            <li><b>83%</b> Moderate arch support</li>
                        </ul>
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
                        <div class="product-information">
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
                            <a href="#">Show More Information <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </div>
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
                    <div class="col-md-3">
                        <div class="product-rightbar">
                            <div class="product-right-top">
                                <div class="pd-total">
                                    <h2 class="h2" id="getprice">${{round($product->price,2)}}</h2>
                                    <label>Ships Free!</label>
                                </div>
                               
                                <div :id="{{$product->id}}" wire:ignore>
                                    <input type="hidden" wire:model="product.id">
                                    <button class="site-btn" wire:key="{{rand()}}" wire:click="addcart">Add to Cart</button>
                 
                                    @if($favoritevalue && $favoritevalue->status == 1)
                                    <a class="site-btn add-collection-btn" wire:click="addFavorite" style="background-color: green;"><i class="fa fa-heart" aria-hidden="true"></i></i>Add to collection</a>
                                    @else
                                    <a class="site-btn add-collection-btn" wire:click="addFavorite"><i class="fa fa-heart" aria-hidden="true"></i></i>Add to collection</a>
                                    @endif
                                    <form>

                                        @if($product && isset($product->variants) && count($product->variants) > 0 )
                                         @foreach($product->variants as $row)
                                        <div class="form-group">
                                            @if(!empty($row->varient1))

                                            <label>{{$varianttag[$row->varient1][0]['name']}}</label>
                                            <select name="attribute1"  class="form-control varition-change" id="varient1" >

                                                @foreach($product->variants as $row)
                                                    @if($row->attribute1 != "")
                                                    <option>{{$row->attribute1}}</option> 
                                                    @endif 
                                                @endforeach
                                            </select>
                                            @endif

                                             @if(!empty($row->varient2))

                                            <label>{{$varianttag[$row->varient2][0]['name']}}</label>
                                            <select name="attribute2" class="form-control varition-change"   id="varient2">

                                                @foreach($product->variants as $row)
                                                    @if($row->attribute2 != "")
                                                    <option>{{$row->attribute2}}</option> 
                                                    @endif 
                                                @endforeach
                                            </select>
                                            @endif

                                             @if(!empty($row->varient3))

                                            <label>{{$varianttag[$row->varient3][0]['name']}}</label>
                                            <select name="attribute3"  class="form-control varition-change" id="varient3">

                                                @foreach($product->variants as $row)
                                                    @if($row->attribute3 != "")
                                                    <option>{{$row->attribute3}}</option> 
                                                    @endif 
                                                @endforeach
                                            </select>
                                            @endif

                                        </div>
                                        <?php break; ?>
                                        @endforeach
                                        @endif
                                    </form>
                                </div>
                                    <button id="variant_id" class="site-btn" wire:click="addCart($event.target.value)">Add to Cart</button>

                                    <a class="site-btn add-collection-btn" href="#"><i class="fa fa-heart" aria-hidden="true"></i></i>Add to 
                                <div :id="{{$product->id}}">
                                    <input type="hidden" id="variant_id">
                                    <button class="site-btn single-pd-btn" wire:key="{{rand()}}" wire:click="addcart">Add to Cart</button>
                                    <a class="site-btn single-pd-btn" href="#">Add to collection</a>

                                    <div :id="{{$product->id}}">
                                        <input type="hidden" id="variant_id">
                                        <button class="site-btn single-pd-btn" wire:key="{{rand()}}" wire:click="addcart">Add to Cart</button>
                                        <a class="site-btn single-pd-btn" href="#">Add to collection</a>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="product-right-bottom">
                                <div class="size-and-social pd-right-p">
                                    <a href="#">Don't See your size?</a>
                                    <a href="#"> Notify Me of the New Styles</a>
                                    <ul class="product-right-social">
                                        <li>Share:</li>
                                        <li><a class="pd-facebook" href="#"><i class="fa fa-facebook-square f-24"></i></a></li>
                                        <li><a class="pd-twitter" href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                                        <li><a class="pd-pinterest" href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
                                        <li><a class="pd-mail" href="#"><i class="fa fa-envelope-square f-24"></i></a></li>
                                    </ul>
                                </div>
                                <div class="recommended-rightbar">
                                    <h5 class="h5">Recommended For You</h5>
                                    <div class="rcmd-rightbar-pd">
                                        <img src="https://m.media-amazon.com/images/I/81aOMhB200L._AC_SX272_.jpg">
                                        <div class="multi-item-content">
                                            <a class="wish-list" href="#" tabindex="0"><i class="fa fa-heart-o" aria-hidden="true"></i>595</a>
                                            <p>ASICS</p>
                                            <p class="multi-pd-title">GEL-Nimbus® 22</p>
                                            <p class="product-price"><span class="mrp-price">$99.95</span><span class="msrp-price">MSRP: $150.00</span></p>
                                        </div>
                                    </div>
                                    <div class="rcmd-rightbar-pd">
                                        <img src="https://m.media-amazon.com/images/I/81aOMhB200L._AC_SX272_.jpg">
                                        <div class="multi-item-content">
                                            <a class="wish-list" href="#" tabindex="0"><i class="fa fa-heart-o" aria-hidden="true"></i>595</a>
                                            <p>ASICS</p>
                                            <p class="multi-pd-title">GEL-Nimbus® 22</p>
                                            <p class="product-price"><span class="mrp-price">$99.95</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="similar-items-sec multi-item-slider">
                            <h3 class="h3">Similar Items You May Like!</h3>
                            <div class="similar-items-slider">
                                @foreach($productrelated as $rows)
                                @foreach($Productmediass as $row_img)
                                <?php $decodeA = json_decode($rows->collection);  
                                      $decodeB = json_decode($product->collection); 
                                ?>
                                @if(!empty($decodeA))
                                @foreach($decodeA as $decoderes)
                                @if(is_array($decodeB) && !empty($decodeB))
                                @if(in_array($decoderes, $decodeB) && $product->id != $rows->id && $row_img[0]['product_id'] == $rows->id)
                                <div>
                                    @if($row_img && isset($row_img[0]))
                                    <img src="{{ asset('storage/'.$row_img[0]['image']) }}">
                                    @endif
                                    <div class="multi-item-content">
                                        <a class="wish-list" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 595</a>
                                        <p>ASICS</p>
                                        <p class="multi-pd-title">{{$rows->title}}</p>
                                        <p class="product-price"><span class="mrp-price">$99.95</span><span class="msrp-price">MSRP: $150.00</span></p>
                                    </div>
                                </div>
                                @endif
                                @endif
                                @endforeach
                                @endif
                                @endforeach
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
                                @foreach($Productmediass as $row_img)
                               
                                @if($pro_res->id == $result->id && $row_img[0]['product_id'] == $pro_res->id)
                                <div>
                                    <img src="{{ asset('storage/'.$row_img[0]['image']) }}">
                                    <div class="multi-item-content">
                                        <a class="wish-list" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 595</a>
                                        <p>{{$pro_res->title}}</p>
                                        <p class="multi-pd-title">GEL-Nimbus® 22</p>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                @endforeach
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
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


