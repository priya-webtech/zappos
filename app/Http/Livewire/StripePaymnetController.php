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
    public $Cart,$CartItem,$ProductVariant,$varianttag,$orderdetail,$singleCart,$firstname,$lastname,$streetname,$city,$country,$pincode,$mobile,$Taxes, $view,$discoutget,$billing_type,$orderID,$unit_number,$countries,$newaddress,$customerAddress,$customerbillingAddress,$first_name,$last_name,$address,$apartment,$postal_code,$mobile_no,$newbillingaddress,$primary_billing_type,$same_shipping;
    public $isDisabled;

    protected $rules = [
        'orderdetail.first_name' => ['required'],
        'orderdetail.last_name' => ['required'],
        'orderdetail.company' => ['required'],
        'orderdetail.address' => ['required'],
        'orderdetail.unit_number' => ['required'],
        'orderdetail.city' => ['required'],
        'orderdetail.country' => ['required'],
        'orderdetail.pincode' => ['required'],
        'orderdetail.mobile' => [],

        'customerAddress.first_name' => ['required'],
        'customerAddress.last_name' => ['required'],
        'customerAddress.address' => ['required'],
        'customerAddress.company' => ['required'],
        'customerAddress.apartment' => ['required'],
        'customerAddress.city' => ['required'],
        'customerAddress.country' => ['required'],
        'customerAddress.postal_code' => ['required'],
        'customerAddress.mobile_no' => [],

        'customerbillingAddress.first_name' => ['required'],
        'customerbillingAddress.last_name' => ['required'],
        'customerbillingAddress.address' => ['required'],
        'customerbillingAddress.company' => ['required'],
        'customerbillingAddress.apartment' => ['required'],
        'customerbillingAddress.city' => ['required'],
        'customerbillingAddress.country' => ['required'],
        'customerbillingAddress.postal_code' => ['required'],
        'customerbillingAddress.mobile_no' => [],

    ];
    public function mount($id)
    {
        $this->user_id =  Auth::user()->id;
        $this->countries = Country::all();
        $this->orderID = $id;
        $this->view = false;
        $this->orderdetail = Orders::find($id);
        $this->customerAddress = [];
        $this->customerbillingAddress = [];
        $this->billing_type = false;
        $this->primary_billing_type = false;
        $this->newaddress = false;
        $this->newbillingaddress = false;
        $this->same_shipping = false;

        $this->customerAddress = CustomerAddress::where('user_id',$this->user_id)->where('address_type','shipping_address')->where('is_billing_address', 'yes')->first();


        $this->customerbillingAddress = CustomerAddress::where('user_id',$this->user_id)->where('address_type','billing_address')->where('is_billing_address', 'yes')->first(); 

        // Shipping Address Manager
        if(!empty($this->customerAddress)) {
            $this->billing_type = ($this->customerAddress->is_billing_address == 'yes') ? true : false;
            $this->newaddress = false;
            $this->view = true;
        } else {
       
            $this->newaddress = true;

        }

        // Billing Address Manager 
        if(!empty($this->customerbillingAddress)) {
            $this->primary_billing_type = ($this->customerbillingAddress->is_billing_address == 'yes') ? true : false;
            $this->newbillingaddress = false;
            $this->view = true;
        } else {
       
            $this->newbillingaddress = true;

        }



        $this->discoutget = Cart::where('user_id', $this->user_id)->first();
        $this->Taxes = tax::where('id',1)->first();
        $this->ProductVariant = ProductVariant::get();
        $this->varianttag = VariantTag::All();
        if (Auth::check()) {
            $this->CartItem =  Cart::with(['media_product', 'product_detail'])->where('user_id',$this->user_id)->get();
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

    public function NewShippingAddress(){


        if($this->newaddress == true) {
                 
            $this->customerAddress['first_name'] = '';

            $this->customerAddress['last_name'] = '';

            $this->customerAddress['apartment'] = '';

            $this->customerAddress['address'] = '';

            $this->customerAddress['company'] = '';

            $this->customerAddress['city'] = '';

            $this->customerAddress['country'] = '';

            $this->customerAddress['postal_code'] = '';

            $this->customerAddress['mobile_no'] = '';

            $this->primary_billing_type = '';                
        }
        else{

            $this->customerAddress = CustomerAddress::where('user_id',$this->user_id)->where('address_type','shipping_address')->where('is_billing_address', 'yes')->first();


            // Shipping Address Manager
            if(!empty($this->customerAddress)) {
                $this->billing_type = ($this->customerAddress->is_billing_address == 'yes') ? true : false;
                $this->newaddress = false;
                $this->view = true;
            } else {
           
                $this->newaddress = true;

            }
        }
    }

    public function NewBillingAddress(){

    
        if($this->newbillingaddress == true) {
                 
            $this->customerbillingAddress['first_name'] = '';

            $this->customerbillingAddress['last_name'] = '';

            $this->customerbillingAddress['apartment'] = '';

            $this->customerbillingAddress['address'] = '';

            $this->customerbillingAddress['company'] = '';

            $this->customerbillingAddress['city'] = '';

            $this->customerbillingAddress['country'] = '';

            $this->customerbillingAddress['postal_code'] = '';

            $this->customerbillingAddress['mobile_no'] = '';

            $this->billing_type = '';                
        }
        else{

            $this->customerbillingAddress = CustomerAddress::where('user_id',$this->user_id)->where('address_type','billing_address')->where('is_billing_address', 'yes')->first(); 

            // Billing Address Manager 
            if(!empty($this->customerbillingAddress)) {
                $this->primary_billing_type = ($this->customerbillingAddress->is_billing_address == 'yes') ? true : false;
                $this->newbillingaddress = false;
                $this->view = true;
            } else {
           
                $this->newbillingaddress = true;

            }
        }
    }

    public function SameShipping(){

        if($this->same_shipping == true) {
                      
            if($this->billing_type){
                $shipping_value_type = 'yes';
            }else if(!$this->billing_type){
                $shipping_value_type = 'no';
            }

           $checkvalidation = $this->validate([
                'customerAddress.first_name' => ['required'],
                'customerAddress.last_name' => ['required'],
                'customerAddress.address' => ['required'],
                'customerAddress.company' => ['required'],
                'customerAddress.apartment' => ['required'],
                'customerAddress.city' => ['required'],
                'customerAddress.country' => ['required'],
                'customerAddress.postal_code' => ['required'],
                'customerAddress.mobile_no' => ['between:10,12|numeric'],

            ]);

            if($this->newaddress == true){

                $this->customerbillingAddress['first_name'] = $this->customerAddress['first_name'];

                $this->customerbillingAddress['last_name'] = $this->customerAddress['last_name'];
                 
                $this->customerbillingAddress['apartment'] = $this->customerAddress['apartment'];
              
                $this->customerbillingAddress['address'] = $this->customerAddress['address'];
                
                $this->customerbillingAddress['company'] = $this->customerAddress['company'];

                $this->customerbillingAddress['city'] = $this->customerAddress['city'];

                $this->customerbillingAddress['country'] = $this->customerAddress['country'];
                
                $this->customerbillingAddress['postal_code'] = $this->customerAddress['postal_code'];
                
                $this->customerbillingAddress['mobile_no'] = $this->customerAddress['mobile_no'];
                
                $this->customerbillingAddress['address_type'] = 'billing_address';
               
                $this->primary_billing_type =  $shipping_value_type;

            }else{


                $this->customerbillingAddress['user_id'] = $this->customerAddress['user_id'];

                $this->customerbillingAddress['first_name'] = $this->customerAddress['first_name'];

                $this->customerbillingAddress['last_name'] = $this->customerAddress['last_name'];
                 
                $this->customerbillingAddress['apartment'] = $this->customerAddress['apartment'];
              
                $this->customerbillingAddress['address'] = $this->customerAddress['address'];
                
                $this->customerbillingAddress['company'] = $this->customerAddress['company'];

                $this->customerbillingAddress['city'] = $this->customerAddress['city'];

                $this->customerbillingAddress['country'] = $this->customerAddress['country'];
                
                $this->customerbillingAddress['postal_code'] = $this->customerAddress['postal_code'];
                
                $this->customerbillingAddress['mobile_no'] = $this->customerAddress['mobile_no'];
                
                $this->customerbillingAddress['address_type'] = 'billing_address';
               
                $this->primary_billing_type =  $shipping_value_type;    
            } 

        }else {
        
            $this->customerbillingAddress = CustomerAddress::where('user_id',$this->user_id)->where('address_type','billing_address')->where('is_billing_address', 'yes')->first(); 

            // Billing Address Manager 
            if(!empty($this->customerbillingAddress)) {
                $this->primary_billing_type = ($this->customerbillingAddress->is_billing_address == 'yes') ? true : false;
                $this->newbillingaddress = false;
                $this->view = true;
            } else {
           
                $this->newbillingaddress = true;

            }

        }

    }
    public function addshipping($id)
    {

        if($this->billing_type){
            $shipping_value_type = 'yes';
        }else if(!$this->billing_type){
            $shipping_value_type = 'no';
        }

        if($this->newbillingaddress){
            $billing_value_type = 'yes';
        }else if(!$this->newbillingaddress){
            $billing_value_type = 'no';
        }

         $this->validate([
                'customerAddress.first_name' => ['required'],
                'customerAddress.last_name' => ['required'],
                'customerAddress.address' => ['required'],
                'customerAddress.company' => ['required'],
                'customerAddress.apartment' => ['required'],
                'customerAddress.city' => ['required'],
                'customerAddress.country' => ['required'],
                'customerAddress.postal_code' => ['required'],
                'customerAddress.mobile_no' => ['between:10,12|numeric'],

                'customerbillingAddress.first_name' => ['required'],
                'customerbillingAddress.last_name' => ['required'],
                'customerbillingAddress.address' => ['required'],
                'customerbillingAddress.company' => ['required'],
                'customerbillingAddress.apartment' => ['required'],
                'customerbillingAddress.city' => ['required'],
                'customerbillingAddress.country' => ['required'],
                'customerbillingAddress.postal_code' => ['required'],
                'customerbillingAddress.mobile_no' => ['between:10,12|numeric'],
            ]);

         $paymentdetail = Orders::where('id', $id)->update([
                'first_name' => $this->customerAddress['first_name'],
                'last_name' => $this->customerAddress['last_name'],
                'address' => $this->customerAddress['address'],
                'company' => $this->customerAddress['company'],
                'unit_number' => $this->customerAddress['apartment'],
                'city' => $this->customerAddress['city'],
                'country' => $this->customerAddress['country'],
                'pincode' => $this->customerAddress['postal_code'],
                'mobile' => $this->customerAddress['mobile_no'],
                'billing_type' => $shipping_value_type,

                'b_first_name' => $this->customerbillingAddress['first_name'],
                'b_last_name' => $this->customerbillingAddress['last_name'],
                'b_address' => $this->customerbillingAddress['address'],
                'b_company' => $this->customerbillingAddress['company'],
                'b_unit_number' => $this->customerbillingAddress['apartment'],
                'b_city' => $this->customerbillingAddress['city'],
                'b_country' => $this->customerbillingAddress['country'],
                'b_pincode' => $this->customerbillingAddress['postal_code'],
                'b_mobile' => $this->customerbillingAddress['mobile_no'],
                'b_billing_type' => $billing_value_type,
            ]);

        if($this->newaddress == true){

            CustomerAddress::where('user_id',Auth::user()->id)->where('address_type','shipping_address')->update([ 

                'is_billing_address' => 'no',
            ]);

            CustomerAddress::create([

                'user_id' => Auth::user()->id,
                
                'first_name' => $this->customerAddress['first_name'],

                'last_name' => $this->customerAddress['last_name'],
                 
                'apartment' => $this->customerAddress['apartment'],
              
                'address' => $this->customerAddress['address'],
                
                'company' => $this->customerAddress['company'],

                'city' => $this->customerAddress['city'],

                'country' => $this->customerAddress['country'],
                
                'postal_code' => $this->customerAddress['postal_code'],
                
                'mobile_no' => $this->customerAddress['mobile_no'],
                
                'address_type' => 'shipping_address',
               
                'is_billing_address' =>  $shipping_value_type,


            ]);

        }else{

            CustomerAddress::where('id', $this->customerAddress->id)->update([

                'user_id' => $this->customerAddress['user_id'],
                
                'first_name' => $this->customerAddress['first_name'],

                'last_name' => $this->customerAddress['last_name'],
                 
                'apartment' => $this->customerAddress['apartment'],
              
                'address' => $this->customerAddress['address'],
                
                'address' => $this->customerAddress['company'],

                'city' => $this->customerAddress['city'],

                'country' => $this->customerAddress['country'],
                
                'postal_code' => $this->customerAddress['postal_code'],
                
                'mobile_no' => $this->customerAddress['mobile_no'],
                
                'address_type' => 'shipping_address',
               
                'is_billing_address' =>  $shipping_value_type,
            ]);
            
        }


        if($this->newbillingaddress == true){

            CustomerAddress::where('user_id',Auth::user()->id)->where('address_type','billing_address')->update([ 

                'is_billing_address' => 'no',
            ]);

            CustomerAddress::create([

                'user_id' => Auth::user()->id,
                
                'first_name' => $this->customerbillingAddress['first_name'],

                'last_name' => $this->customerbillingAddress['last_name'],
                 
                'apartment' => $this->customerbillingAddress['apartment'],
              
                'address' => $this->customerbillingAddress['address'],
                
                'company' => $this->customerbillingAddress['company'],

                'city' => $this->customerbillingAddress['city'],

                'country' => $this->customerbillingAddress['country'],
                
                'postal_code' => $this->customerbillingAddress['postal_code'],
                
                'mobile_no' => $this->customerbillingAddress['mobile_no'],
                
                'address_type' => 'billing_address',
               
                'is_billing_address' =>  $billing_value_type,


            ]);

        }else{

            CustomerAddress::where('id', $this->customerbillingAddress->id)->update([

                'user_id' => $this->customerbillingAddress['user_id'],
                
                'first_name' => $this->customerbillingAddress['first_name'],

                'last_name' => $this->customerbillingAddress['last_name'],
                 
                'apartment' => $this->customerbillingAddress['apartment'],
              
                'address' => $this->customerbillingAddress['address'],
                
                'address' => $this->customerbillingAddress['company'],

                'city' => $this->customerbillingAddress['city'],

                'country' => $this->customerbillingAddress['country'],
                
                'postal_code' => $this->customerbillingAddress['postal_code'],
                
                'mobile_no' => $this->customerbillingAddress['mobile_no'],
                
                'address_type' => 'billing_address',
               
                'is_billing_address' =>  $billing_value_type,
            ]);
            
        }

        if($paymentdetail) {
                $this->view = true;
                 Session::flash('shipp_success', 'New Shipping Created Successfully!');
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

               if($request->redirect_status == 'succeeded' && $paymentdetail){

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
