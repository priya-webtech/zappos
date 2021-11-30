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

use App\Models\CustomerAddress;

use App\Models\Country;

use Session;

use Stripe;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class StripePaymnetController extends Component
{
    public $Cart,$CartItem,$ProductVariant,$varianttag,$orderdetail,$singleCart,$firstname,$lastname,$streetname,$city,$country,$pincode,$mobile,$Taxes, $view,$discoutget,$billing_type,$orderID,$unit_number,$countries,$newaddress,$customerAddress,$first_name,$last_name,$address,$apartment,$postal_code,$mobile_no;


    protected $rules = [
        'orderdetail.first_name' => ['required'],
        'orderdetail.last_name' => ['required'],
        'orderdetail.address' => ['required'],
        'orderdetail.unit_number' => ['required'],
        'orderdetail.city' => ['required'],
        'orderdetail.country' => ['required'],
        'orderdetail.pincode' => ['required'],
        'orderdetail.mobile' => [],


        'customerAddress.first_name' => ['required'],
        'customerAddress.last_name' => ['required'],
        'customerAddress.address' => ['required'],
        'customerAddress.apartment' => ['required'],
        'customerAddress.city' => ['required'],
        'customerAddress.country' => ['required'],
        'customerAddress.postal_code' => ['required'],
        'customerAddress.mobile_no' => [],

    ];
    public function mount($id)
    {
        $this->user_id =  Auth::user()->id;
        $this->countries = Country::all();
        $this->orderID = $id;
        $this->view = false;
        $this->orderdetail = Orders::where('id',$id)->first();
       
        $this->customerAddress = CustomerAddress::where('user_id',$this->user_id)->where('address_type','shipping_address')->where('is_billing_address','yes')->first();

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

        if($this->billing_type == true){
            $billing_value_type = 'yes';
        }else{
            $billing_value_type = 'no';
        }

        if($this->newaddress == true){

            $this->validate([
                'first_name' => ['required'],
                'last_name' => ['required'],
                'address' => ['required'],
                'apartment' => ['required'],
                'city' => ['required'],
                'country' => ['required'],
                'postal_code' => ['required'],
                'mobile_no' => ['between:10,12|numeric'],
            ]);

            $paymentdetail = Orders::where('id', $id)->update([
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'address' => $this->address,
                'unit_number' => $this->apartment,
                'city' => $this->city,
                'country' => $this->country,
                'pincode' => $this->postal_code,
                'mobile' => $this->mobile_no,
                'billing_type' => $billing_value_type,
            ]);

            $bill_arr = [

                'user_id' => $this->customerAddress['user_id'],
                
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,                 
                'apartment' => $this->apartment,              
                'address' => $this->address,
                'city' => $this->city,
                'country' => $this->country,                
                'postal_code' => $this->postal_code,                
                'mobile_no' => $this->mobile_no,                
                'address_type' => 'shipping_address',
               
                'is_billing_address' => 'yes',
            ];

            CustomerAddress::create($bill_arr);

            if($paymentdetail) {
                $this->view = true;
                 Session::flash('shipp_success', 'Shipping Update Successfully!');
            }
        }else{

            $this->validate([
                'customerAddress.first_name' => ['required'],
                'customerAddress.last_name' => ['required'],
                'customerAddress.address' => ['required'],
                'customerAddress.apartment' => ['required'],
                'customerAddress.city' => ['required'],
                'customerAddress.country' => ['required'],
                'customerAddress.postal_code' => ['required'],
                'customerAddress.mobile_no' => ['between:10,12|numeric'],
            ]);

            $paymentdetail = Orders::where('id', $id)->update([
                'first_name' => $this->customerAddress['first_name'],
                'last_name' => $this->customerAddress['last_name'],
                'address' => $this->customerAddress['address'],
                'unit_number' => $this->customerAddress['apartment'],
                'city' => $this->customerAddress['city'],
                'country' => $this->customerAddress['country'],
                'pincode' => $this->customerAddress['postal_code'],
                'mobile' => $this->customerAddress['mobile_no'],
                'billing_type' => $billing_value_type,
            ]);

            $bill_arr = 

            CustomerAddress::where('id', $this->customerAddress['id'])->update([

                'user_id' => $this->customerAddress['user_id'],
                
                'first_name' => $this->customerAddress['first_name'],

                'last_name' => $this->customerAddress['last_name'],
                 
                'apartment' => $this->customerAddress['apartment'],
              
                'address' => $this->customerAddress['address'],

                'city' => $this->customerAddress['city'],

                'country' => $this->customerAddress['country'],
                
                'postal_code' => $this->customerAddress['postal_code'],
                
                'mobile_no' => $this->customerAddress['mobile_no'],
                
                'address_type' => 'shipping_address',
               
                'is_billing_address' => 'yes',
            ]);
            if($paymentdetail) {
                $this->view = true;
                 Session::flash('shipp_success', 'New Shipping Created Successfully!');
            }
        }

    }


    public function thankYou($id, Request $request)

    {


        $getCartid = Orders::where('id',$id)->first();
        
        dd($request->redirect_status);
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
