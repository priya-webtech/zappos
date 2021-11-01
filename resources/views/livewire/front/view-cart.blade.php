<div>
    <x-customer-layout>
       <div class="view-cart-sec">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="continue-shoping-btn">
                            <a href="#" class="site-link-btn"><i class="fa fa-angle-left" aria-hidden="true"></i> Continue Shopping</a>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="my-cart-tbl">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $subtotal = 0;  $discountrate = 0; $total = 0; @endphp
                                    @if($CartItem)
                                    @foreach($CartItem as $cart)
                                    @php 

                                    $detailfetch = allprice($cart->product_id);

                                    if($detailfetch){

                                    $subtotal += $detailfetch['price']; 
                                    if(!empty($detailfetch['discount'])){
                                    $discountrate += $detailfetch['discount'];
                                    } 
                                    $total += $subtotal;
                                    }
                                    @endphp
                                    <tr>
                                        <td>
                                            <div class="my-cart-pd-details">
                                                <div class="my-cart-img">
                                                    <a class="dropdown-header" href="{{ route('product-front-detail', $cart['product_detail'][0]['seo_utl']) }}">
                                                    <img src="{{ url('storage/'.$cart['media_product'][0]['image']) }}"></a>
                                                </div>
                                                <div class="my-cart-desc">
                                                    <span>Vans</span>
                                                    <h6> {{$cart['product_detail'][0]['title']}}</h6>
                                                    @include('livewire.front.cartdetail')
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="my-cart-quantity">
                                                <select>
                                                    <option>Remove</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="cart-pd-price">${{number_format($detailfetch['price'],2,".",",")}}</span>
                                            @if(!empty($detailfetch['discount']))
                                            <span class="msrp-price">Discount: ${{number_format($detailfetch['discount'],2,".",",")}}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="viewcart-tbl-btn">

                                                @php
                                                $result = favorite($cart['product_detail'][0]['id']);
                                                @endphp
                                                @if(!empty($result))
                                                <a class="wish-list {{$result['class']}}" wire:click="UpdateWish({{$result['id']}}, {{$result['product_id']}})">move to<i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                @endif
                                                <a class="remove-btn" wire:click.prevent="DeleteCartProduct({{$cart['id']}})"><i class="fa fa-trash" aria-hidden="true"></i> Remove</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="checkout-right">
                            <div class="offer-code">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Have a Promotional Code?</label>
                                    <p class="d-flex">
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                        <button type="submit">Apply</button>
                                    </p>
                                </div>
                            </div>
                            <div class="viewcart-checkout">
                                <div class="vc-inner">
                                    <p class="cart-summary">Cart Summary (1 Item)</p>
                                    <p class="subtotal">subtotal: <span>${{number_format($subtotal,2,".",",")}}</span></p>
                                    <p class="discount-price">discount: <span>-${{number_format($discountrate,2,".",",")}}</span></p>
                                    <p class="total-price">total: <span>${{number_format($total,2,".",",")}}</span></p>
                                </div>
                                <div class="vc-inner">
                                    <a href="#" class="site-btn">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-customer-layout>
</div>
