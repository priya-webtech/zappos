<div>
    <x-customer-layout>
    {{-- In work, do what you enjoy. --}}
    <!DOCTYPE html>
   





    <title>Laravel 6 - Stripe Payment Gateway Integration Example - </title>

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
                    @if($view == 'address')

                    <div class="shipping-details-card">

                        <h3 class="panel-title">Shipping Details</h3>

                        <form role="form" id="address-form" class="require-validation"  >
                            
                            <input type="hidden" name="orderid" value="{{$orderdetail->id}}">
                            <div class='form-row'>

                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>Full name</label> 
                                    <input class='form-control' wire:model="fullname" name="fullname" type='text'>
                                </div>
                                <div class='col-xs-12 form-group'>
                                    <label class='control-label'>Address</label> 
                                    <textarea class='form-control' wire:model="address" name="address" type='text'></textarea>
                                </div>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>City</label> 
                                    <input class='form-control' wire:model="city" name="city" type='text'>
                                </div>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>Country</label> 
                                    <input class='form-control' wire:model="country" name="country" type='text'>
                                </div>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>Pincode</label> 
                                    <input class='form-control' wire:model="pincode" name="pincode" type='text'>
                                </div>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>Mobile Number</label> 
                                    <input class='form-control' wire:model="mobile" name="mobile" type='text'>
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
                                  
                                    <button class="site-btn" wire:click.prevent="addshipping({{$orderdetail->id}})" >Submit</button>

                                </div>

                            </div>

                        </form>
                    </div>
                    @endif
                    <div class="review-shipping-sec">
                        <h3 class="panel-title">Shipping Details</h3>
                        @php $subtotal = 0;  $subtotal1 = 0;  $subtotal2 = 0; $discountrate = 0; $total = 0; @endphp
                        @if($CartItem)
                        @foreach($CartItem as $key => $cart)
                        @php 
                        $detailfetch = allprice($cart->product_id);

                        if($detailfetch['selling_price']){
                         $subtotal1 += $cart['stock'] * $detailfetch['selling_price'];
                        }else
                        {
                          $subtotal2 += $cart['stock'] * $detailfetch['price'];
                        }

                        $subtotal = $subtotal1 + $subtotal2;

                       
                        if(!empty($detailfetch['discount'])){
                        $discountrate += $detailfetch['discount'] * $cart['stock'];
                        } 
                       
                        $total = $subtotal - $discountrate;

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
                                    <span><b>Sale:</b> <span class="red-color">${{number_format($detailfetch['price'],2,'.',',')}}</span></span>
                                    @if(!empty($detailfetch['selling_price']))
                                    <span class="grey-color"><b>MSRP:</b> ${{number_format($detailfetch['selling_price'],2,'.',',')}}</span>
                                    @endif
                                </p>
                                @endif
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
  
                </div>

            </div>        

        </div>

        <div class="col-md-4">
            <div class="viewcart-checkout">
                <div class="vc-inner">
                    <p class="cart-summary">Order Summary (@php echo count($CartItem); @endphp Item Items)</p>
                    <p class="subtotal">subtotal:<span>${{number_format($subtotal,2,".",",")}}</span></p>
                    <p class="subtotal">Shipping Cost:<span>Free</span></p>
                    <p class="discount-price">discount: <span>-${{number_format($discountrate,2,".",",")}}</span></p>
                    <p class="subtotal">Total before tax:<span>${{number_format($total,2,".",",")}}</span></p>
                    <p class="subtotal">Estimated tax to be collected:*<span>${{number_format($gst_include,2,".",",") }}</span></p>
                </div>
                <div class="vc-inner">
                    <p class="total-price">total: <span>${{number_format($gst_Total,2,".",",")}}</span></p>
                </div>
            </div>
            <form id="payment-form">
                @csrf
                <h3 class="panel-title">Payment</h3>
                <label for="name"> Account Holder Name</label>
                <div class="account-name-row">
                    <input id="acholdername" value="" required>
                    <label for="ideal-bank-element" class="bank-name">iDEAL Bank</label>
                     <div id="ideal-bank-element">
                      <!-- A Stripe Element will be inserted here. -->
                    </div>
                </div>
                <div class="account-name-row">
                   
                    <button type="submit">Pay ${{number_format($gst_Total,2,".",",")}}</button>
                </div>
                <!-- Used to display form errors. -->
                <div id="error-message" role="alert"></div>
              </form>
           

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

          // Confirm the payment that was created server side:
          const {error, paymentIntent} = await stripe.confirmIdealPayment(
            '<?= $paymentIntent->client_secret; ?>', {
              payment_method: {
                ideal: idealBank,
                billing_details: {
                    name: accountholderName.value,
                },
              },
              return_url: app_url+`/thankyou/`+orderid,
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
    