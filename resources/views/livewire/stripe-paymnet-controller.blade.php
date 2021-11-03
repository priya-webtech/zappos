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
                        <div class="my-cart-pd-details">
                            <div class="my-cart-img">
                                <a class="dropdown-header" href="#">
                                    <img src="http://127.0.0.1:8000/storage/media/nU6wmGj0C1dy5DUk13yDMuEnqNSo4uaNWZktAb0L.jpg">
                                </a>
                            </div>
                            <div class="my-cart-desc">
                                <span>Splendid</span>
                                <h6>1x1 Classic Long Sleeve Turtleneck</h6>
                                <p>
                                    <span><b>Color:</b> White</span>
                                    <span><b>Size:</b> MD (Women's 6-8)</span>
                                </p>
                                <p>
                                    <span><b>Sale:</b> <span class="red-color">$44.95</span></span>
                                    <span class="grey-color"><b>MSRP:</b> $58.00</span>
                                </p>
                            </div>
                        </div>
                        <div class="my-cart-pd-details">
                            <div class="my-cart-img">
                                <a class="dropdown-header" href="#">
                                    <img src="http://127.0.0.1:8000/storage/media/nU6wmGj0C1dy5DUk13yDMuEnqNSo4uaNWZktAb0L.jpg">
                                </a>
                            </div>
                            <div class="my-cart-desc">
                                <span>Splendid</span>
                                <h6>1x1 Classic Long Sleeve Turtleneck</h6>
                                <p>
                                    <span><b>Color:</b> White</span>
                                    <span><b>Size:</b> MD (Women's 6-8)</span>
                                </p>
                                <p>
                                    <span><b>Sale:</b> <span class="red-color">$44.95</span></span>
                                    <span class="grey-color"><b>MSRP:</b> $58.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
  
                </div>

            </div>        

        </div>

        <div class="col-md-4">
            <div class="viewcart-checkout">
                <div class="vc-inner">
                    <p class="cart-summary">Order Summary (3 Items)</p>
                    <p class="subtotal">subtotal:<span>$334.85</span></p>
                    <p class="subtotal">Shipping Cost:<span>Free</span></p>
                    <p class="discount-price">discount: <span>-$10.00</span></p>
                    <p class="subtotal">Total before tax:<span>$324.85</span></p>
                    <p class="subtotal">Estimated tax to be collected:*<span>$0.00</span></p>
                </div>
                <div class="vc-inner">
                    <p class="total-price">total: <span>$324.85</span></p>
                </div>
            </div>
            <form id="payment-form">
                @csrf
                <h3 class="panel-title">Payment</h3>
                <label for="name"> Account Holder Name</label>
                <div class="account-name-row">
                    <input id="acholdername" value="" required>
                    <label for="ideal-bank-element" class="bank-name">iDEAL Bank</label>
                </div>
                <div class="account-name-row">
                    <div id="ideal-bank-element">
                      <!-- A Stripe Element will be inserted here. -->
                    </div>
                    <button type="submit">Pay {{$orderdetail->netamout}}</button>
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
        const idealBank = elements.create('idealBank');
        idealBank.mount('#ideal-bank-element');


        const paymentForm = document.querySelector('#payment-form');
        paymentForm.addEventListener('submit', async (e) => {
          // Avoid a full page POST request.
          e.preventDefault();
          var orderid = '<?= $orderdetail->id ?>';
          // Customer inputs
          const nameInput = document.querySelector('#acholdername');

          // Confirm the payment that was created server side:
          const {error, paymentIntent} = await stripe.confirmIdealPayment(
            '<?= $paymentIntent->client_secret; ?>', {
              payment_method: {
                ideal: idealBank,
              },
              return_url: `${window.location.origin}/thankyou/`+orderid,
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
