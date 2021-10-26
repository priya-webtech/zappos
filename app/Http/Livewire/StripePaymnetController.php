<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Cart;

use App\Models\Product;

use App\Models\Orders;

use App\Models\order_item;

use App\Models\VariantStock;

use App\Models\ProductVariant;

use Session;

use Stripe;

use Illuminate\Http\Request;

class StripePaymnetController extends Component
{
    public $Cart,$orderdetail,$singleCart,$fullname,$address,$city,$country,$pincode,$mobile, $view;

    public function mount($id)
    {
        $this->view = 'address';
        $this->orderdetail = Orders::where('id',$id)->first();
    }
    public function render()
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET_KEY'));

        try {
          $paymentIntent = $stripe->paymentIntents->create([
            'payment_method_types' => ['ideal'],
            'amount' => $this->orderdetail->netamout,
            'currency' => 'eur',
          ]);
            $this->fullname = $this->orderdetail->fullname;
            $this->address = $this->orderdetail->address;
            $this->city  = $this->orderdetail->city;
            $this->country  = $this->orderdetail->country;
            $this->pincode  = $this->orderdetail->pincode;
            $this->mobile  = $this->orderdetail->mobile;

          return view('livewire.stripe-paymnet-controller', ['paymentIntent' => $paymentIntent]);


        } catch (\Stripe\Exception\ApiErrorException $e) {
          http_response_code(400);
          error_log($e->getError()->message); 
        }
        
     
    }
    public function addshipping($id)
    {
        $paymentdetail = Orders::where('id', $id)->update(
                    [
                        'fullname' => $this->fullname,
                        'address' => $this->address,
                        'city' => $this->city,
                        'country' => $this->country,
                        'pincode' => $this->pincode,
                        'mobile' => $this->mobile,
                    ]
                );
        if($paymentdetail) {
            $this->view = 'payment';
        }
    }


    public function thankYou(Request $request) {

        try {

            $order = Orders::where('id', $id)->update(
                    [
                        'transactionid' => $request->get('payment_intent'),
                        'paymentstatus' => 'success',
                    ]
                );
           return view('livewire.thankyou',['order' => $order]);
           

        } catch (Exception $ex) {
            return [
                'status' => 'pending',
                'message' => sprintf(__('%s'), $ex->getMessage()) 
            ];
        }
         
    }


    /*public function stripePost(Request $request)

    {

        $STRIPE_KEY = 'pk_test_K34JYHJL8oSxYsrT8ct11JFY00WfJBOiTp';
        $STRIPE_SECRET = 'sk_test_Z6QhEzwO45ckwTvG8zzwIMC4007hY9qpDO';
        

        $getCartid = Orders::where('id',$request->orderid)->first();
        

        \Stripe\Stripe::setApiKey($STRIPE_SECRET);

        $token = $request->stripeToken;

        $charge =  Stripe\Charge::create ([

                "amount" => $getCartid->netamout,

                "currency" => "INR",

                "source" => $token,

                "description" => "Test payment from itsolutionstuff.com.",



        ]);


         $customer = \Stripe\Customer::create(array(
            'name' => 'test',
            'description' => 'test description',
            'email' => 'prajapativishal@gmail.com',
            'address' => ["city" => 'patan', "country" => 'india', "postal_code" => '384265', "state" => 'Gujarat']
        ));
         $order_total_arr = [];

            if($charge->status === 'succeeded'){
                $paymentdetail = Orders::where('id', $request->orderid)->update(
                    [
                        'transactionid' => $charge->balance_transaction,

                        'paymentstatus' => 'success'
                    ]
                );
                
            // Stock Minus Code

           if($paymentdetail){

                $locatioinstock = VariantStock::All();
                $getOrderitem = order_item::where('order_id',$request->orderid)->first();
                $Cart = Cart::where('user_id',$getOrderitem->user_id)->get();
                $Product = Product::All();

                foreach($Cart as $res) { 

                    if($res->varientid != "" && $res->locationid != ""){

                        foreach ($locatioinstock as $key => $stock) {

                            if($res->varientid == $stock->variant_main_id && $res->locationid == $stock->location_id){

                                $finalstock = ($stock->stock - $res->stock);

                                $paymentdetail = VariantStock::where('id', $stock->id)->update(
                                    [
                                        'stock' => $finalstock,
                                    ]
                                );

                            }
                        }
                    }
                    else
                    {

                        foreach ($Product as  $row) {

                            if($res->product_id == $row->id){
                                $stockcollection = collect();
                                $decodestock = json_decode($row['location']);
                                  // 
                                foreach($decodestock as $key => $stock){
                                
                                    if($res->locationid == $key){

                                        $newstock = $stock - $res->stock;
                                        $stockcollection->put($key, $newstock);

                                    }else{
                                        $stockcollection->put($key, $stock);
                                    }
              
                                }

                                $stockencode = $stockcollection->toArray();
                                $fianl  = json_encode($stockencode);
                             
                               $paymentdetail = Product::where('id', $res->product_id)->update(
                                    [
                                        'location' => $fianl,
                                    ]
                                );
                            }     
                            
                        }
                    }
                }
            }

            // Cart Empty
            if($paymentdetail){

                $getOrderitem = order_item::where('order_id',$request->orderid)->first();

                Cart::where('user_id',$getOrderitem->user_id)->delete();
            }

            Session::flash('success', 'Payment succeeded!');

        }

        // Failed Status
         if ($charge->status === 'failed') {

             $paymentdetail = Orders::where('id', $request->orderid)->update(
                    [
                        'transactionid' => $charge->balance_transaction,

                        'paymentstatus' => 'failed'
                    ]
                );

               Session::flash('success', 'Payment failed!');

         }

         if ($charge->status === 'pending') {

             $paymentdetail = Orders::where('id', $request->orderid)->update(
                    [
                        'transactionid' => $charge->balance_transaction,

                        'paymentstatus' => 'pending'
                    ]
                );
             Session::flash('success', 'Payment pending!');
         }
    

        

          

        return back();

    }*/
}
