<div>
    <x-customer-layout>
    {{-- In work, do what you enjoy. --}}
    <!DOCTYPE html>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

   

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

        <div class="col-md-8">

            <div class="panel credit-card-box">


                <div class="checkout-left" wire:ignore>

  

                    @if (Session::has('success'))

                        <div class="alert alert-success text-center">

                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

                            <p>{{ Session::get('success') }}</p>

                        </div>

                    @endif
                    

                    <div class="shipping-details-card">

                        <h3 class="panel-title">Shipping Details</h3>

                        <form role="form" id="address-form" class="require-validation" wire:submit.prevent="addshipping({{$orderdetail->id}})" >
                            
                            <input type="hidden" name="orderid" value="{{$orderdetail->id}}">
                            <div class='form-row'>

                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>Full name</label> 
                                    <input class='form-control' wire:model="fullname" name="fullname" type='text' required>
                                </div>
                                 
                                <div class='col-xs-12 form-group'>
                                    <label class='control-label'>Address</label> 
                                    <textarea class='form-control' wire:model="address" name="address" type='text' required></textarea>
                                </div>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>City</label> 
                                    <input class='form-control' wire:model="city" name="city" type='text' required>
                                </div>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>Country</label> 
                                    <input class='form-control' wire:model="country" name="country" type='text' required>
                                </div>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>Pincode</label> 
                                    <input class='form-control' wire:model="pincode" name="pincode" type='text' required>
                                </div>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>Mobile Number</label> 
                                    <input class='form-control' wire:model="mobile" name="mobile" type='text' required>
                                </div>
                            </div>

                            <div class='form-row'>

                                <div class='col-md-12 error form-group hide'>

                                    <div class='alert-danger alert'>Please correct the errors and try

                                        again.</div>

                                </div>

                            </div>

                            

                            <div class="row">

                                <div class="col-xs-12">
                                  
                                    <button type="submit" class="site-btn" >Submit</button>

                                </div>

                            </div>

                        </form>
                    </div>
                    <div class="shipping-details-card re-order-tbl">
                        <h3 class="panel-title">Order Details</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>order <br> number</th>
                                    <th>date</th>
                                    <th>Prodoct name</th>
                                    <th>quantity</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>10/06/2021</td>
                                    <td class="od-pd-name">
                                        <span>Splendid</span>
                                        <h6>Apple laptop</h6>
                                    </td>
                                    <td>
                                        <div class="add-cart-select">               
                                            <div class="total-item-select">
                                                <input value="1" name="stockitem" type="number">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="od-pd-price">
                                        <span>
                                            <b>Sale:</b> 
                                            <span class="red-color">{{$symbol['currency']}}200.00</span>
                                        </span>
                                        <!-- <span class="grey-color"><b>MSRP:</b> {{$symbol['currency']}}90.00</span> -->
                                    </td>
                                    <td>
                                        <a class="return-order-btn" href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Return Order</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>10/06/2021</td>
                                    <td class="od-pd-name">
                                        <span>Splendid</span>
                                        <h6>Apple laptop</h6>
                                    </td>
                                    <td>
                                        <div class="add-cart-select">               
                                            <div class="total-item-select">
                                                <input value="1" name="stockitem" type="number">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="od-pd-price">
                                        <span>
                                            <b>Sale:</b> 
                                            <span class="red-color">{{$symbol['currency']}}200.00</span>
                                        </span>
                                        <!-- <span class="grey-color"><b>MSRP:</b> {{$symbol['currency']}}90.00</span> -->
                                    </td>
                                    <td>
                                        <a class="return-order-btn" href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Return Order</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>10/06/2021</td>
                                    <td class="od-pd-name">
                                        <span>Splendid</span>
                                        <h6>Apple laptop</h6>
                                    </td>
                                    <td>
                                        <div class="add-cart-select">               
                                            <div class="total-item-select">
                                                <input value="1" name="stockitem" type="number">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="od-pd-price">
                                        <span>
                                            <b>Sale:</b> 
                                            <span class="red-color">{{$symbol['currency']}}200.00</span>
                                        </span>
                                        <!-- <span class="grey-color"><b>MSRP:</b> {{$symbol['currency']}}90.00</span> -->
                                    </td>
                                    <td>
                                        <a class="return-order-btn" href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Return Order</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>10/06/2021</td>
                                    <td class="od-pd-name">
                                        <span>Splendid</span>
                                        <h6>Apple laptop</h6>
                                    </td>
                                    <td>
                                        <div class="add-cart-select">               
                                            <div class="total-item-select">
                                                <input value="1" name="stockitem" type="number">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="od-pd-price">
                                        <span>
                                            <b>Sale:</b> 
                                            <span class="red-color">{{$symbol['currency']}}200.00</span>
                                        </span>
                                        <!-- <span class="grey-color"><b>MSRP:</b> {{$symbol['currency']}}90.00</span> -->
                                    </td>
                                    <td>
                                        <a class="return-order-btn" href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Return Order</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>        

        </div>

        <div class="col-md-4">
            <div class="review-shipping-sec">
                <h3 class="panel-title">Item Review and Shipping</h3>
                @php $subtotal = 0;  $subtotal1 = 0;  $subtotal2 = 0; $discountrate = 0; $total = 0; @endphp
                @if($CartItem)
                @foreach($CartItem as $key => $cart)
                @php 
                $detailfetch = allprice($cart->product_id);

                if($detailfetch['selling_price']){
                 $subtotal1 += $cart['stock'] * $detailfetch['selling_price'];
                }else
                {
                  $subtotal2 += $cart['stock'] * $cart['price'];
                }

                $subtotal = $subtotal1 + $subtotal2;

               
                if(!empty($detailfetch['discount'])){
                $discountrate += $detailfetch['discount'] * $cart['stock'];
                } 
               

                //discount apply
                if($discoutget->discount_type == 2){
                    $promocode = $discoutget->discount;
                    $total = ($subtotal - $discountrate) - $promocode;
                }
                elseif($discoutget->discount_type == 1){
                    $promocode = $discoutget->discount;
                    $percetage_discount = $subtotal - $discountrate;
                    $saveprofit = ($percetage_discount * $promocode / 100);
                    $total = $percetage_discount - $saveprofit;
                }
                else
                {
                    $total = $subtotal - $discountrate;
                }

                $gst = $Taxes->rate;
                 $GetGst = ($gst/100)+1;
                 $withoutgstaount = $total / $GetGst;

                 $gst_include =  ($withoutgstaount*$gst) / 100;
                 $gst_Total = $gst_include + $total;
                @endphp
                <div class="my-cart-pd-details">
                    <div class="my-cart-img">
                        <a class="dropdown-header" href="#">
                            <img src="{{ url('storage/'.$cart['media_product'][0]['image']) }}">
                        </a>
                    </div>
                    <div class="my-cart-desc">
                        <span>Splendid</span>
                        <h6>{{$cart['product_detail'][0]['title']}}</h6>
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
            <div class="viewcart-checkout">
                <div class="vc-inner">
                    <p class="cart-summary">Order Summary (@php echo count($CartItem); @endphp Item Items)</p>
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
              @endif
           

              <div id="messages" role="alert" style="display: none;"></div>
            <p class="privacy-condi-text">By placing your order, you agree to company-name.com’s <a href="#">privacy notice</a> and <a href="#">conditions of use</a>.</p>
        </div>

    </div>

      

</div>

</div>

  

<script src="https://js.stripe.com/v3/"></script>

  

<script type="text/javascript">

$(function() {

   

    var $form         = $(".require-validation");

   

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

 document.addEventListener('DOMContentLoaded', async () => {
    console.log('node added');

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
              return_url: `http://185.160.67.108/estore/public/thankyou/`+orderid,
            },
          );
          if(error) {
            addMessage(error.message);
            return;
          }
          addMessage(`Payment (${paymentIntent.id}): ${paymentIntent.status}`);
        });
      });

</script>


</x-customer-layout>
</div>
    