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
    public $Cart,$orderdetail,$singleCart,$fullname,$address,$city,$country,$pincode,$mobile;

    public function mount($id)
    {

        $this->orderdetail = Orders::where('id',$id)->first();
    }
    public function render()
    {
        return view('livewire.stripe-paymnet-controller');
     
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
    }

    public function stripePost(Request $request)

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

    }
}
