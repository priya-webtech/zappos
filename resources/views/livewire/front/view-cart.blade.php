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
                                    @php $sum = 0; @endphp
                                    @foreach($CartItem as $cart)
                                    @php $sum += $cart['price']; @endphp
                                    @php $detailfetch = pricefetch($cart->id); @endphp
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
                                        </td>
                                        <td>
                                            <div class="viewcart-tbl-btn">

                                                @php
                                                $result = favorite($cart['product_detail'][0]['id']);
                                                @endphp
                                                @if(!empty($result))
                                                <a class="wish-list {{$result['class']}}" wire:click="UpdateWish({{$result['id']}}, {{$result['product_id']}})">move to<i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                @endif
                                                <a class="remove-btn" wire:click.prevent="DeleteCartProduct({{$cart['id']}})">Remove to <i class="fa fa-trash" aria-hidden="true"></i> </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
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
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Promotional Code">
                                        <button type="submit">Apply</button>
                                    </p>
                                </div>
                            </div>
                            <div class="viewcart-checkout">
                                <div class="vc-inner">
                                    <p class="cart-summary">Cart Summary (1 Item)</p>
                                    <p class="subtotal">subtotal: <span>${{number_format($sum,2,".",",")}}</span></p>
                                    <p class="discount-price">discount: <span>-$10.00</span></p>
                                    <p class="subtotal">tax: <span>$10</span></p>
                                    <p class="subtotal">shipping cost: <span>$5</span></p>
                                    <p class="total-price">total: <span>$59.00</span></p>
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
