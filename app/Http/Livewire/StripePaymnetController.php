<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Cart;

use App\Models\Product;

use App\Models\VariantTag;

use Illuminate\Support\Facades\Auth;

use App\Models\Orders;

use App\Models\tax;

use App\Models\order_item;

use App\Models\VariantStock;

use App\Models\ProductVariant;

use Session;

use Stripe;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class StripePaymnetController extends Component
{
    public $Cart,$CartItem,$ProductVariant,$varianttag,$orderdetail,$singleCart,$fullname,$address,$city,$country,$pincode,$mobile,$Taxes, $view,$discoutget, $orderID;

    public function mount($id)
    {
        $this->user_id =  Auth::user()->id;
        
        $this->orderID = $id;
        $this->view = false;
        $this->orderdetail = Orders::where('id',$id)->first();
        $this->discoutget = Cart::where('user_id', $this->user_id)->first();
        $this->Taxes = tax::where('id',1)->first();
        $this->ProductVariant = ProductVariant::get();
        $this->varianttag = VariantTag::All();
        if (Auth::check()) {
            $this->CartItem =  Cart::with(['media_product', 'product_detail'])->where('user_id',$this->user_id)->get();
        }

        $order = Orders::find($this->orderID);

        $this->fullname = $order->fullname;
        $this->address = $order->address;
        $this->city = $order->city;
        $this->country = $order->country;
        $this->pincode = $order->pincode;
        $this->mobile = $order->mobile;

        if(!empty($order->address)) {
            $this->view = true;
        }
    }
    public function render()
    {


        // $stripe = new \Stripe\StripeClient('sk_test_ngkOUeScv0ATVVwLqg88ZdBv00ZX79AIQ8');
        // try {
        //   $paymentIntent = $stripe->paymentIntents->create([
        //     'payment_method_types' => ['ideal'],
        //     'amount' => $this->orderdetail->netamout *100 ,
        //     'currency' => 'eur',
        //     'metadata' => ['order_id' => $this->orderdetail->id]
        //   ]);

          return view('livewire.stripe-paymnet-controller');


        // } catch (\Stripe\Exception\ApiErrorException $e) {
        //     // dd($e->getError()->message);
        //   http_response_code(400);
        //   error_log($e->getError()->message); 
        //   return redirect()->back()->with('message', $e->getError()->message);
        // }

        
     
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
            $this->view = true;
        }
    }


    public function thankYou($id, Request $request)

    {


        $getCartid = Orders::where('id',$id)->first();
        

            if($request->redirect_status == 'succeeded') {
                $paymentdetail = Orders::where('id', $id)->update(
                    [
                        'transactionid' => $request->get('payment_intent'),

                        'paymentstatus' => 'success'
                    ]
                );
                
            // Stock Minus Code

               if($paymentdetail){

                    $locatioinstock = VariantStock::All();
                    $getOrderitem = order_item::where('order_id',$id)->first();
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

                $getOrderitem = order_item::where('order_id',$id)->first();

                Cart::where('user_id',$getOrderitem->user_id)->delete();
            }

            Session::flash('success', 'Payment succeeded!');

        }

        // Failed Status
         if ($request->redirect_status == 'failed') {

             $paymentdetail = Orders::where('id', $id)->update(
                    [
                        'transactionid' => $request->get('payment_intent'),

                        'paymentstatus' => 'failed'
                    ]
                );

               Session::flash('success', 'Payment failed!');

         }

         if ($request->redirect_status == 'pending') {

             $paymentdetail = Orders::where('id', $id)->update(
                    [
                        'transactionid' => $request->get('payment_intent'),

                        'paymentstatus' => 'pending'
                    ]
                );
             Session::flash('success', 'Payment pending!');
         }
    
         return view('livewire.front.thankyou');

    }
}
