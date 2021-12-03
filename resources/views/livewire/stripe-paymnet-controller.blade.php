<div>
    <x-customer-layout>
    {{-- In work, do what you enjoy. --}}
    <!DOCTYPE html>

<!--     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" /> -->

   

    <style type="text/css">

        .panel-title {

        display: inline;

        font-weight: bold;

        }

        .display-table {

            display: table;

        }

        .display-tr {

            display: table-row;

        }

        .display-td {

            display: table-cell;

            vertical-align: middle;

            width: 61%;

        }

    </style>



@php $symbol = CurrencySymbol(); @endphp

<div class="checkout-page-sec">

<div class="container">

  

    <h1 class="h1">Checkout<br/> </h1>

  

    <div class="row">

        <div class="col-lg-8 col-12">

            <div class="panel credit-card-box">


                <div class="checkout-left">

  

                    @if (Session::has('shipp_success'))

                        <div class="alert alert-success text-center">

                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

                            <p>{{ Session::get('shipp_success') }}</p>

                        </div>

                    @endif
                    <form role="form" id="address-form" class="require-validation">

                    <div class="shipping-details-card">

                        <h3 class="panel-title">Shipping Details</h3>

                        @if($newaddress == true)
                        <div class="form-check">
                            <input type="checkbox" id="defaultAddress" disabled class="form-check-input" wire:click="NewShippingAddress()" wire:model="newaddress" <?php if($view) echo 'readonly'; ?>>
                            <label class="form-check-label" for="defaultAddress">Create New Shipping Address</label>
                        </div>
                        @else
                        <div class="form-check">
                            <input type="checkbox" id="defaultAddress" class="form-check-input" wire:click="NewShippingAddress()" wire:model="newaddress" <?php if($view) echo 'readonly'; ?>>
                            <label class="form-check-label" for="defaultAddress">Create New Shipping Address</label>
                        </div>
                        @endif
                        <div id="bydefultform"  wire:ignore.self>
                        
                                <input type="hidden" name="orderid" value="{{$orderdetail->id}}">

                                <div class='form-row'>
                                    <div class="col">
                                        <div class='form-group required'>
                                            <label class='control-label'>First Name</label> 
                                            <input class='form-control' wire:model="customerAddress.first_name" name="firstname" placeholder="First Name" type='text' required  <?php if($view) echo 'readonly'; ?> >
                                            @error('customerAddress.first_name') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class='form-group required'>
                                            <label class='control-label'>Last Name</label> 
                                            <input class='form-control' wire:model="customerAddress.last_name" name="lastname" placeholder="Last Name" type='text' required <?php if($view) echo 'readonly'; ?>>
                                            @error('customerAddress.last_name') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class='form-row'>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="control-label">Company Name</label>
                                            <input type="text" class="form-control" wire:model="customerAddress.company" placeholder="Company Name" <?php if($view) echo 'readonly'; ?>>
                                            @error('customerAddress.company') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class='form-row street-unit-row'>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="control-label">Street Name</label>
                                            <input type="text" class="form-control" wire:model="customerAddress.address" placeholder="Street Name" <?php if($view) echo 'readonly'; ?>>
                                            @error('customerAddress.address') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="primaryVoiceNumber">Unit Number</label>
                                            <input type="number" wire:model="customerAddress.apartment" class="form-control" id="primaryVoiceNumber" aria-describedby="emailHelp" placeholder="Unit Number" <?php if($view) echo 'readonly'; ?>>
                                            @error('customerAddress.unit_number') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="postalCode">Zip</label>
                                            <input type="number" wire:model="customerAddress.postal_code" class="form-control" id="postalCode" aria-describedby="emailHelp" placeholder="12345" <?php if($view) echo 'readonly'; ?>>
                                            @error('customerAddress.postal_code') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="City">City</label>
                                            <input type="text" class="form-control" wire:model="customerAddress.city" id="City" aria-describedby="emailHelp" placeholder="Enter City" <?php if($view) echo 'readonly'; ?>>
                                            @error('customerAddress.city') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="Country">Country</label>
                                            <select class="form-control" id="Country" wire:model="customerAddress.country" <?php if($view) echo 'readonly'; ?>>
                                                <option value="">-- Select Countries --</option>
                                                @foreach($countries as $row)
                                                <option value="{{$row->name}}">{{$row->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('customerAddress.country') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="primaryVoiceNumber">Phone</label>
                                            <input type="number" class="form-control" id="primaryVoiceNumber" aria-describedby="emailHelp" wire:model="customerAddress.mobile_no" placeholder="123-456-7890" <?php if($view) echo 'readonly'; ?>> 
                                            @error('customerAddress.mobile_no') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class='form-row'>

                                    <div class='col-md-12 error form-group hide'>

                                        <div class='alert-danger alert'>Please correct the errors and try

                                            again.</div>

                                    </div>

                                </div> -->

                                <div class="form-check">
                                    <input type="checkbox" wire:model="billing_type" class="form-check-input"  id="billing_type" <?php if($view) echo 'readonly'; ?>>
                                    <label class="form-check-label" for="billing_type">Make this my primary Shipping address</label>
                                </div>       
                        </div>
                    </div>
                    <div class="shipping-details-card">

                        <h3 class="panel-title">Billing Details</h3>

                        <div class="form-check">
                            <input type="checkbox" id="defaultAddress" class="form-check-input" wire:model="same_shipping" wire:click="SameShipping()" wire:ignore.self>
                            <label class="form-check-label" for="defaultAddress">Same as Shipping Details</label>
                        </div>

                        @if($newbillingaddress == true)
                        <div class="form-check">
                            <input type="checkbox" id="defaultAddress" disabled class="form-check-input" wire:model="newbillingaddress" wire:click="NewBillingAddress" <?php if($view) echo 'readonly'; ?>>
                            <label class="form-check-label" for="defaultAddress">Create New Billing Address</label>
                        </div>
                        @else
                        <div class="form-check">
                            <input type="checkbox" id="defaultAddress" class="form-check-input" wire:model="newbillingaddress" wire:click="NewBillingAddress" <?php if($view) echo 'readonly'; ?>>
                            <label class="form-check-label" for="defaultAddress">Create New Billing Address</label>
                        </div>
                        @endif

                            <input type="hidden" name="orderid" value="{{$orderdetail->id}}">

                                <div class='form-row'>
                                    <div class="col">
                                        <div class='form-group required'>
                                            <label class='control-label'>First Name</label> 
                                            <input class='form-control' wire:model="customerbillingAddress.first_name" name="firstname" placeholder="First Name" type='text' required <?php if($view) echo 'readonly'; ?>>
                                            @error('customerbillingAddress.first_name') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class='form-group required'>
                                            <label class='control-label'>Last Name</label> 
                                            <input class='form-control' wire:model="customerbillingAddress.last_name" name="lastname" placeholder="Last Name" type='text' required <?php if($view) echo 'readonly'; ?>>
                                            @error('customerbillingAddress.last_name') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class='form-row'>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="control-label">Company Name</label>
                                            <input type="text" class="form-control" wire:model="customerbillingAddress.company" placeholder="Company Name" <?php if($view) echo 'readonly'; ?>>
                                            @error('customerbillingAddress.company') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class='form-row street-unit-row'>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="control-label">Street Name</label>
                                            <input type="text" class="form-control" wire:model="customerbillingAddress.address" placeholder="Street Name" <?php if($view) echo 'readonly'; ?>>
                                            @error('customerbillingAddress.address') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="primaryVoiceNumber">Unit Number</label>
                                            <input type="number" wire:model="customerbillingAddress.apartment" class="form-control" id="primaryVoiceNumber" aria-describedby="emailHelp" placeholder="Unit Number" <?php if($view) echo 'readonly'; ?>>
                                            @error('customerbillingAddress.unit_number') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="postalCode">Zip</label>
                                            <input type="number" wire:model="customerbillingAddress.postal_code" class="form-control" id="postalCode" aria-describedby="emailHelp" placeholder="12345" <?php if($view) echo 'readonly'; ?>>
                                            @error('customerbillingAddress.postal_code') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="City">City</label>
                                            <input type="text" class="form-control" wire:model="customerbillingAddress.city" id="City" aria-describedby="emailHelp" placeholder="Enter City" <?php if($view) echo 'readonly'; ?>>
                                            @error('customerbillingAddress.city') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="Country">Country</label>
                                            <select class="form-control" id="Country" wire:model="customerbillingAddress.country" <?php if($view) echo 'readonly'; ?>>
                                                <option value="">-- Select Countries --</option>
                                                @foreach($countries as $row)
                                                <option value="{{$row->name}}">{{$row->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('customerbillingAddress.country') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="primaryVoiceNumber">Phone</label>
                                            <input type="number" class="form-control" id="primaryVoiceNumber" aria-describedby="emailHelp" wire:model="customerbillingAddress.mobile_no" placeholder="123-456-7890" <?php if($view) echo 'readonly'; ?>> 

                                            @error('customerbillingAddress.mobile_no') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class='form-row'>

                                    <div class='col-md-12 error form-group hide'>

                                        <div class='alert-danger alert'>Please correct the errors and try

                                            again.</div>

                                    </div>

                                </div> -->

                                <div class="form-check">
                                    <input type="checkbox" wire:model="primary_billing_type" class="form-check-input"  id="primary_billing_type" <?php if($view) echo 'readonly'; ?>>
                                    <label class="form-check-label" for="billing_address_type">Make this my primary billing address</label>
                                </div>
                                

                                <div class="row">

                                    <div class="col-xs-12">
                                      
                                        <button class="site-btn blue-btn" wire:click.prevent="addshipping({{$orderdetail->id}})" <?php if($view) echo 'disabled'; ?>>Submit</button>

                                    </div>

                                </div>
                                @if($view)
                                <div class="row">
                                     <div class="col-xs-12">
                                      
                                       <button class="site-btn blue-btn" wire:click.prevent="editshipping()">Edit</button>

                                    </div>
                                </div>
                                @endif

                            </div>
                        </div>
                    </div>

                </div>        

        

        <div class="col-lg-4 col-12">
            <div class="review-shipping-sec">
                <h3 class="panel-title">Item Review and Shipping</h3>
                @php $subtotal = 0;  $subtotal1 = 0;  $subtotal2 = 0; $discountrate = 0; $total = 0; $subtotal3 = 0; $subtotal4 = 0; $subtotal5 = 0; $subtotal6 = 0; @endphp
                @if(!empty($CartItem))
                @foreach($CartItem as $key => $cart)
                <?php 
                $detailfetch = allprice($cart->product_id);
                $symbol = CurrencySymbol();


                if(!empty($discoutget->promocode) && count($discoutget->promocode) > 0) 
                {
                    $decodeproduct = json_decode($discoutget['promocode'][0]['apply_c_p']);
                    if ($discoutget['promocode'][0]['applyto'] == 3 && in_array($cart->product_id, $decodeproduct))
                    {
                        if($discoutget['promocode'][0]['type'] == 2){
                          
                            if($detailfetch['selling_price']){
                              $subtotal3 += $cart['stock'] * $detailfetch['selling_price'];
                            }else
                            {
                              $subtotal4 += $cart['stock'] * $cart['price'];
                               
                            }
                           
                        }
                        if($discoutget['promocode'][0]['type'] == 1){

                            if($detailfetch['selling_price']){
                              $subtotal3 += $cart['stock'] * $detailfetch['selling_price'];
                            }else
                            {
                              $subtotal4 += $cart['stock'] * $cart['price'];
                               
                            }
                        }
                    }
                    elseif ($discoutget['promocode'][0]['applyto'] == 2){
                        $categoryget = json_decode($detailfetch['product']['collection']);
                 
                        foreach ($categoryget as $key => $value) {
                           if(in_array($value, $decodeproduct)){

                            if($discoutget['promocode'][0]['type'] == 2){
                                if($detailfetch['selling_price']){
                                  $subtotal3 += $cart['stock'] * $detailfetch['selling_price'];
                                }else
                                {
                                  $subtotal4 += $cart['stock'] * $cart['price'];
                                   
                                }
                               
                            }
                            if($discoutget['promocode'][0]['type'] == 1){

                                if($detailfetch['selling_price']){
                                  $subtotal3 += $cart['stock'] * $detailfetch['selling_price'];
                                }else
                                {
                                  $subtotal4 += $cart['stock'] * $cart['price'];
                                   
                                }
                                
                            }
                           }else{
                                if($detailfetch['selling_price']){

                                 $subtotal1 += $cart['stock'] * $detailfetch['selling_price'];
                                }else
                                {
                                  $subtotal2 += $cart['stock'] * $cart['price'];
                                }

                           }
                        }
                    }else{

                        if($detailfetch['selling_price']){

                         $subtotal1 += $cart['stock'] * $detailfetch['selling_price'];
                        }else
                        {

                          $subtotal2 += $cart['stock'] * $cart['price'];
                        }

                    }
                }

                else
                {

                    if($detailfetch['selling_price']){

                     $subtotal1 += $cart['stock'] * $detailfetch['selling_price'];
                    }else
                    {

                      $subtotal2 += $cart['stock'] * $cart['price'];
                    }


                }

                if(!empty($detailfetch['discount'])){
                  $discountrate += $detailfetch['discount'] * $cart['stock'];
                }


               ?>

               

             
                <div class="my-cart-pd-details">
                    <div class="my-cart-img">
                        <a class="dropdown-header" href="#">
                            <img src="{{ url('storage/'.$cart['media_product'][0]['image']) }}">
                        </a>
                    </div>
                    <div class="my-cart-desc">
                        <span>Splendid</span>
            
                        <h6>{{$cart->product_detail->title}}</h6>
                        @include('livewire.front.cartdetail')
                        @if(!empty($detailfetch))
                        <p>
                            <span><b>Sale:</b> <span class="red-color">{{$symbol['currency']}}{{number_format($cart['price'],2,'.',',')}}</span></span>
                            @if(!empty($detailfetch['selling_price']))
                            <span class="grey-color"><b>MSRP:</b> {{$symbol['currency']}}{{number_format($detailfetch['selling_price'],2,'.',',')}}</span>
                            @endif
                        </p>
                        @endif
                    </div>
                </div>
                @endforeach
                @endif
            </div>
            <?php 
                if(!empty($discoutget->promocode) && count($discoutget->promocode) > 0) 
                {
                    if ($discoutget['promocode'][0]['applyto'] == 3)
                    {
                        if($discoutget['promocode'][0]['type'] == 2){
                        $promocode = $discoutget['promocode'][0]['discount_value'];
                        $sumproduct = $subtotal4 + $subtotal3;
                        $subtotal5 = $sumproduct - $promocode;
                        }
                        if($discoutget['promocode'][0]['type'] == 1){
                        $promocode = $discoutget['promocode'][0]['discount_value'];
                        $sumproduct = $subtotal4 + $subtotal3;
                        $saveprofit = ($sumproduct * $promocode / 100);
                        $subtotal5 = $sumproduct - $saveprofit;
                        }
                    }
                    if ($discoutget['promocode'][0]['applyto'] == 2)
                    {
                        if($discoutget['promocode'][0]['type'] == 2){
                        $promocode = $discoutget['promocode'][0]['discount_value'];
                        $sumproduct = $subtotal4 + $subtotal3;
                        $subtotal5 = $sumproduct - $promocode;
                        }
                        if($discoutget['promocode'][0]['type'] == 1){
                        $promocode = $discoutget['promocode'][0]['discount_value'];
                        $sumproduct = $subtotal4 + $subtotal3;
                        $saveprofit = ($sumproduct * $promocode / 100);
                        $subtotal5 = $sumproduct - $saveprofit;
                        }
                    }
                }

                $subtotal6 = $subtotal1 + $subtotal2;

                $subtotal = $subtotal6 + $subtotal5;
                    

                if (!empty($discoutget->promocode) && count($discoutget->promocode) > 0 && $discoutget['promocode'][0]['applyto'] == 3)
                {
                //discount apply
                    if($discoutget['promocode'][0]['type'] == 2){
                        
                         $promocode = $discoutget['promocode'][0]['discount_value'];
                        $total = ($subtotal - $discountrate) - $promocode;

                    }
                    if($discoutget['promocode'][0]['type'] == 1){
                      
                        $total = $subtotal - $discountrate;


                    
                    }
                }
                elseif (!empty($discoutget->promocode) && count($discoutget->promocode) > 0 && $discoutget['promocode'][0]['applyto'] == 2) {

                    if($discoutget['promocode'][0]['type'] == 2){
                        
                        $total = $subtotal - $discountrate;


                    }
                    if($discoutget['promocode'][0]['type'] == 1){
                      
                        $total = $subtotal - $discountrate;
                        
                    
                    }
                }
                else{

                    if(!empty($discoutget->promocode) && count($discoutget->promocode) > 0 && $discoutget['promocode'][0]['type'] == 2){
                        $promocode = $discoutget['promocode'][0]['discount_value'];
                        $total = ($subtotal - $discountrate) - $promocode;


                    }
                    if(!empty($discoutget->promocode) && count($discoutget->promocode) > 0 && $discoutget['promocode'][0]['type'] == 1){
                        $promocode = $discoutget['promocode'][0]['discount_value'];
                        $percetage_discount = $subtotal - $discountrate;
                        $saveprofit = ($percetage_discount * $promocode / 100);
                        $total = $percetage_discount - $saveprofit;
                    
                    }
                    else
                    {
                        $total = $subtotal - $discountrate;
                    }
                }

                 $gst = $Taxes->rate;
                $GetGst = ($gst/100)+1;
                $withoutgstaount = $total / $GetGst;

                $gst_include =  ($withoutgstaount*$gst) / 100;
                $gst_Total = $gst_include + $total;
            ?>
            <div class="viewcart-checkout">
                <div class="vc-inner">
                    <p class="cart-summary">Order Summary (@php echo $CartItem->sum('stock'); @endphp Item Items)</p>
                    <p class="subtotal">subtotal:<span>{{$symbol['currency']}}{{number_format($subtotal,2,".",",")}}</span></p>
                    <p class="subtotal">Shipping Cost:<span>Free</span></p>
                    <p class="discount-price">discount: <span>-{{$symbol['currency']}}{{number_format($discountrate,2,".",",")}}</span></p>
                    <p class="subtotal">Total before tax:<span>{{$symbol['currency']}}{{number_format($total,2,".",",")}}</span></p>
                    <p class="subtotal">Estimated tax to be collected:*<span>{{$symbol['currency']}}{{number_format($gst_include,2,".",",") }}</span></p>
                </div>
                <div class="vc-inner">
                    <p class="total-price">total: <span>{{$symbol['currency']}}{{number_format($gst_Total,2,".",",")}}</span></p>
                </div>
            </div>
            @if($view)

            <div class="viewcart-checkout">
            <div class="vc-inner">
            <div class="payment-form">
            <form id="payment-form">
                @csrf
                <h3 class="panel-title">Payment</h3>
                <label for="name"> Account Holder Name</label>
                <div class="account-name-row">
                    <input id="acholdername" value="" required>
                </div>
                <label for="ideal-bank-element" class="bank-name">iDEAL Bank</label>

                <div class="account-name-row">

                     <div id="ideal-bank-element">
                      <!-- A Stripe Element will be inserted here. -->
                    </div>

                    
                </div>
                 <div class="account-name-row">
                <button type="submit">Pay {{$symbol['currency']}}{{number_format($gst_Total,2,".",",")}}</button>
            </div>
                <!-- Used to display form errors. -->
                <div id="error-message" role="alert"></div>
              </form>
          </div>
      </div>
      </div>
              @endif
           

              <div id="messages" role="alert" style="display: none;"></div>
            <p class="privacy-condi-text">By placing your order, you agree to company-name.com’s <a href="#">privacy notice</a> and <a href="#">conditions of use</a>.</p>
        </div>

        </div>

    </div>

      

</div>

</div>

@livewireScripts
  

<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">

$(function() {
    var $form = $(".require-validation");

    $('form.require-validation').bind('submit', function(e) {

        var $form         = $(".require-validation"),

        inputSelector = ['input[type=email]', 'input[type=password]',

                         'input[type=text]', 'input[type=file]',

                         'textarea'].join(', '),

        $inputs       = $form.find('.required').find(inputSelector),

        $errorMessage = $form.find('div.error'),

        valid         = true;

        $errorMessage.addClass('hide');

  

        $('.has-error').removeClass('has-error');

        $inputs.each(function(i, el) {

          var $input = $(el);

          if ($input.val() === '') {

            $input.parent().addClass('has-error');

            $errorMessage.removeClass('hide');

            e.preventDefault();

          }

        });

   

        if (!$form.data('cc-on-file')) {

          e.preventDefault();

          Stripe.setPublishableKey($form.data('stripe-publishable-key'));

          Stripe.createToken({

            number: $('.card-number').val(),

            cvc: $('.card-cvc').val(),

            exp_month: $('.card-expiry-month').val(),

            exp_year: $('.card-expiry-year').val()

          }, stripeResponseHandler);

        }

  

  });

  

  function stripeResponseHandler(status, response) {


        if (response.error) {

            $('.error')

                .removeClass('hide')

                .find('.alert')

                .text(response.error.message);

        } else {

            /* token contains id, last4, and card type */

            var token = response['id'];

               

            $form.find('input[type=text]').empty();

            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");

            $form.get(0).submit();

        }

    }
  

});

 document.addEventListener('DOMNodeInserted', function (e) {
    console.log('node added');
     if ($(e.target).hasClass('payment-form')) {
     

        const stripe = Stripe('pk_test_eEW1sG9Y0HvZ0SuSZsWts81500648362WW');
        const elements = stripe.elements();
        var accountholderName = document.getElementById('acholdername');

        const idealBank = elements.create('idealBank');
        idealBank.mount('#ideal-bank-element');


        const paymentForm = document.querySelector('#payment-form');
        paymentForm.addEventListener('submit', async (e) => {

          // Avoid a full page POST request.
          e.preventDefault();
          var orderid = '<?= $orderdetail->id ?>';
          var app_url = '<?= env('APP_URL') ?>';
          // Customer inputs
          const nameInput = document.querySelector('#acholdername');
          const amounts = '<?= $gst_Total ?>';

           <?php

                 
                 $amt =number_format((float)$gst_Total, 2, '.', '');


                  $stripe = new \Stripe\StripeClient('sk_test_ngkOUeScv0ATVVwLqg88ZdBv00ZX79AIQ8');
       
                  $paymentIntent = $stripe->paymentIntents->create([
                    'payment_method_types' => ['ideal'],
                    'amount' => $amt *100 ,
                    'currency' => 'eur',
                    'metadata' => ['order_id' => $orderdetail->id]
                  ]);
               
             ?>


          // Confirm the payment that was created server side:
          const {error, paymentIntent} = await stripe.confirmIdealPayment(
            '<?= $paymentIntent->client_secret; ?>', {
              payment_method: {
                ideal: idealBank,
                billing_details: {
                    name: accountholderName.value,
                },
              },
                return_url: `http://185.160.67.108/estore/public/thankyou/`+orderid,            },
          );
          if(error) {
            addMessage(error.message);
            return;
          }
          addMessage(`Payment (${paymentIntent.id}): ${paymentIntent.status}`);
        });
    }
      });

</script>


</x-customer-layout>
</div>
    