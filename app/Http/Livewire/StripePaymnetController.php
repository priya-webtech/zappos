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

use App\Models\CustomerComment;

use App\Models\OrderShipping;

use App\Models\VariantStock;

use App\Models\ProductVariant;

use App\Models\CustomerAddress;

use App\Models\Country;

use App\Models\favorite;

use App\Models\ProductMedia;

use Session;

use Stripe;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\DB;


class StripePaymnetController extends Component
{
    public $Cart,$CartItem,$ProductVariant,$varianttag,$orderdetail,$singleCart,$firstname,$lastname,$streetname,$city,$country,$pincode,$mobile,$Taxes, $view,$discoutget,$billing_type,$orderID,$unit_number,$countries,$newaddress,$customerAddress,$customerbillingAddress,$first_name,$last_name,$address,$apartment,$postal_code,$mobile_no,$newbillingaddress,$primary_billing_type,$same_shipping,$product,$Productmediass;
    public $isDisabled, $editMode, $Product;
    public $stripe_publishable_key, $stripe_secret_key;

    protected $rules = [

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
    public function mount()
    {
        $this->editMode = false;
        $this->user_id =  Auth::user()->id;
        $this->countries = Country::all();
    
        $this->orderdetail = OrderShipping::where('user_id',$this->user_id)->orderBy('id', 'DESC')->first();
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

        if(!empty($this->orderdetail->addr_id)) {
            $this->editMode = true;
            $this->newaddress = false;

            $this->customerAddress = [
                'id' =>  $this->orderdetail->addr_id,
                'first_name' => $this->orderdetail->first_name,
                'last_name' => $this->orderdetail->last_name,
                'address' => $this->orderdetail->address,
                'company' => $this->orderdetail->company,
                'apartment' => $this->orderdetail->unit_number,
                'city' => $this->orderdetail->city,
                'country' => $this->orderdetail->country,
                'postal_code'=> $this->orderdetail->pincode,
                'mobile_no' => $this->orderdetail->mobile,
            ];

            if($this->orderdetail->billing_type == 'yes'){
                $this->billing_type = true;
            }else {
               $this->billing_type  = false;
            }

            $this->same_shipping = true;

        } elseif(!empty($this->customerAddress)) {
            $this->billing_type = ($this->customerAddress->is_billing_address == 'yes') ? true : false;
            $this->newaddress = false;
          
        } else {
       
            $this->newaddress = true;

        }

        if(!empty($this->orderdetail->b_addr_id)) {
            $this->editMode = true;
            $this->newbillingaddress = false;
            $this->same_shipping = false;

            $this->customerbillingAddress = [
                'id' => $this->orderdetail->b_addr_id,
                'first_name' => $this->orderdetail->b_first_name,
                'last_name' => $this->orderdetail->b_last_name,
                'address' => $this->orderdetail->b_address,
                'company' => $this->orderdetail->b_company,
                'apartment' => $this->orderdetail->b_unit_number,
                'city' => $this->orderdetail->b_city,
                'country' => $this->orderdetail->b_country,
                'postal_code'=> $this->orderdetail->b_pincode,
                'mobile_no' => $this->orderdetail->b_mobile,
            ];
            if($this->orderdetail->b_billing_type == 'yes'){
                $this->primary_billing_type = true;
            }else {
               $this->primary_billing_type  = false;
            }

        }elseif(!empty($this->customerbillingAddress)) {
            $this->primary_billing_type = ($this->customerbillingAddress->is_billing_address == 'yes') ? true : false;
            $this->newbillingaddress = false;
      
        } else {
       
            $this->newbillingaddress = true;

        }


        $this->discoutget = Cart::where('user_id', $this->user_id)->first();
        $this->Taxes = tax::where('id',1)->first();
        $this->ProductVariant = ProductVariant::get();
        $this->varianttag = VariantTag::All();
        if (Auth::check()) {
            $this->CartItem =  Cart::with(['media_product', 'product_detail'])->where('user_id',$this->user_id)->get();
            if(empty($this->CartItem)) {
                session()->flash('alert', 'Cart is empty!');

                return redirect()->to('/');
            }
             $data = DB::table('stripe_key_detail')->first();
            if(empty($data)) {
                session()->flash('alert', 'You can not do Payment!');
                return redirect()->to('/account/viewcart/detail');
            } 
             $this->stripe_publishable_key = $data->stripe_publishable_key;
                $this->stripe_secret_key = $data->stripe_secret_key;
        }

        
       
    }
    public function render()
    {

        return view('livewire.stripe-paymnet-controller');    
        
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

            $this->customerAddress = CustomerAddress::where('user_id',Auth::user()->id)->where('address_type','shipping_address')->where('is_billing_address', 'yes')->first();


            // Shipping Address Manager
            if(!empty($this->customerAddress)) {
                $this->billing_type = ($this->customerAddress->is_billing_address == 'yes') ? true : false;
                $this->newaddress = false;
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

            $this->customerbillingAddress = CustomerAddress::where('user_id',Auth::user()->id)->where('address_type','billing_address')->where('is_billing_address', 'yes')->first(); 

            // Billing Address Manager 
            if(!empty($this->customerbillingAddress)) {
                $this->primary_billing_type = ($this->customerbillingAddress->is_billing_address == 'yes') ? true : false;
                $this->newbillingaddress = false;
            } else {
           
                $this->newbillingaddress = true;

            }
        }
    }

    public function SameShipping(){

        

    }
    public function addshipping($id)
    {

        if($this->editMode) {
            $this->newaddress = false;
            // $this->newbillingaddress = false;
        }

        if($this->billing_type){
            $shipping_value_type = 'yes';
        }else if(!$this->billing_type){
            $shipping_value_type = 'no';
        }

        if($this->primary_billing_type){
            $billing_value_type = 'yes';
        }else if(!$this->primary_billing_type){
            $billing_value_type = 'no';
        }

        if($this->same_shipping == true) {


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


                $this->customerbillingAddress['first_name'] = $this->customerAddress['first_name'];

                $this->customerbillingAddress['last_name'] = $this->customerAddress['last_name'];
                 
                $this->customerbillingAddress['apartment'] = $this->customerAddress['apartment'];
              
                $this->customerbillingAddress['address'] = $this->customerAddress['address'];
                
                $this->customerbillingAddress['company'] = $this->customerAddress['company'];

                $this->customerbillingAddress['city'] = $this->customerAddress['city'];

                $this->customerbillingAddress['country'] = $this->customerAddress['country'];
                
                $this->customerbillingAddress['postal_code'] = $this->customerAddress['postal_code'];
                
                $this->customerbillingAddress['mobile_no'] = $this->customerAddress['mobile_no'];


        }else {
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

        }

        if($shipping_value_type == 'yes') {

            CustomerAddress::where('user_id',Auth::user()->id)->where('address_type','shipping_address')->update([ 
                'is_billing_address' => 'no',
            ]);
        }

        if($this->newaddress == true){

           
            $this->customerAddress = CustomerAddress::create([

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

            CustomerAddress::where('id', $this->customerAddress['id'])->update([
                
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
            
        }

        if($billing_value_type == 'yes') {

            CustomerAddress::where('user_id',Auth::user()->id)->where('address_type','billing_address')->update([ 

                'is_billing_address' => 'no',
            ]);
        }


        if(!$this->same_shipping) {
            if($this->newbillingaddress == true ){

               $this->customerbillingAddress = CustomerAddress::create([

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

            } else {

                CustomerAddress::where('id', $this->customerbillingAddress['id'])->update([
                    
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
                
            }
        }

         $paymentdetail = OrderShipping::where('id', $id)->update([
                'addr_id' => $this->customerAddress['id'],
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

                'b_addr_id'=>  isset($this->customerbillingAddress['id']) ? $this->customerbillingAddress['id'] : null,
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


        if($paymentdetail) {
                $this->view = true;
                
            }

    }


    public function thankYou(Request $request)

    {

        date_default_timezone_set("Europe/Amsterdam");
        
            if($request->redirect_status == 'succeeded') {
                $user_id =  Auth::user()->id;

                    $ordershipping = OrderShipping::where('user_id',$user_id)->first();

                    $this->Cart = Cart::where('user_id',$user_id)->get();

                     $Order_insert = orders::insert(
                        $order_arr = [


                                'user_id' => $user_id,
                                
                                'uuid' => '1',
                                
                                'transactionid' => $request->get('payment_intent'),

                                'netamout' => $ordershipping['netamout'],

                                'paymentstatus' => 'pending',
                                
                                'first_name' => $ordershipping['first_name'],

                                'last_name' => $ordershipping['last_name'],

                                'address' => $ordershipping['address'],
                                'company' => $ordershipping['company'],
                                'unit_number' => $ordershipping['unit_number'],
                                'city' => $ordershipping['city'],
                                'country' => $ordershipping['country'],
                                'pincode' => $ordershipping['pincode'],
                                'mobile' => $ordershipping['mobile'],
                                'billing_type' => $ordershipping['billing_type'],
                                'b_first_name' => $ordershipping['b_first_name'],
                                'b_last_name' => $ordershipping['b_last_name'],
                                'b_address' => $ordershipping['b_address'],
                                'b_company' => $ordershipping['b_company'],
                                'b_unit_number' => $ordershipping['b_unit_number'],
                                'b_city' => $ordershipping['b_city'],
                                'b_country' => $ordershipping['b_country'],
                                'b_pincode' => $ordershipping['b_pincode'],
                                'b_mobile' => $ordershipping['b_mobile'],
                                'b_billing_type' => $ordershipping['b_billing_type'],

                            ]
                        );


                    if($Order_insert){
                    // Insert Record Order Item
                        $this->lastorderid = Orders::where('user_id',$user_id)->orderBy('id', 'DESC')->first();

                        $insert_order_item =[];
                        foreach($this->Cart as $res) {         
                            if($res) {
                                $totalamout = ($res->price * $res->stock);
                                $order_item_arr = [

                                    'order_id' => $this->lastorderid['id'],
                                    
                                    'order_uid' => $this->lastorderid['uuid'],
                                    
                                    'user_id' => $res->user_id,

                                    'product_id' => $res->product_id,

                                    'varition_id' => $res->varientid,
                                    
                                    'price' => $res->price,
                                    
                                    'stock' => $res->stock,
                                    
                                    'total' => $totalamout,

            

                                ];
                                $insert_order_item[] = $order_item_arr;
                            }               
                        }
                    }

                    $Orderitemvalue =  order_item::insert($insert_order_item);
                
            // Stock Minus Code

               if($request->redirect_status == 'succeeded' && $Order_insert){

                    $lastorderid = Orders::where('user_id',$user_id)->orderBy('id', 'DESC')->first();

                    $locatioinstock = VariantStock::All();
                    $getOrderitem = order_item::where('order_id',$lastorderid->id)->first();
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
                $lastorderid = Orders::where('user_id',$user_id)->orderBy('id', 'DESC')->first();

                $getOrderitem = order_item::where('order_id',$lastorderid->id)->first();

                $Comment_arr = [

                    'user_id' => $user_id,
                    
                    'message' => 'This customer placed order #'.$lastorderid->id,
                ];


                CustomerComment::create($Comment_arr);

                Cart::where('user_id',$getOrderitem->user_id)->delete();
            }

            Session::flash('success', 'Payment succeeded!');

        }

        // Failed Status
         if ($request->redirect_status == 'failed') {

             $user_id =  Auth::user()->id;

                    $ordershipping = OrderShipping::where('user_id',$user_id)->first();

                    $this->Cart = Cart::where('user_id',$user_id)->get();

                     $Order_insert = orders::insert(
                        $order_arr = [


                                'user_id' => $user_id,
                                
                                'uuid' => '1',
                                
                                'transactionid' => $request->get('payment_intent'),

                                'netamout' => $ordershipping['netamout'],

                                'paymentstatus' => 'failed',
                                
                                'first_name' => $ordershipping['first_name'],

                                'last_name' => $ordershipping['last_name'],
                                
                                'address' => $ordershipping['address'],

                                'company' => $ordershipping['company'],
                                'unit_number' => $ordershipping['unit_number'],
                                'city' => $ordershipping['city'],
                                'country' => $ordershipping['country'],
                                'pincode' => $ordershipping['pincode'],
                                'mobile' => $ordershipping['mobile'],
                                'billing_type' => $ordershipping['billing_type'],
                                'b_first_name' => $ordershipping['b_first_name'],
                                'b_last_name' => $ordershipping['b_last_name'],
                                'b_address' => $ordershipping['b_address'],
                                'b_company' => $ordershipping['b_company'],
                                'b_unit_number' => $ordershipping['b_unit_number'],
                                'b_city' => $ordershipping['b_city'],
                                'b_country' => $ordershipping['b_country'],
                                'b_pincode' => $ordershipping['b_pincode'],
                                'b_mobile' => $ordershipping['b_mobile'],
                                'b_billing_type' => $ordershipping['b_billing_type'],

                            ]
                        );


                    if($Order_insert){
                    // Insert Record Order Item
                        $this->lastorderid = Orders::where('user_id',$user_id)->orderBy('id', 'DESC')->first();

                        $insert_order_item =[];
                        foreach($this->Cart as $res) {         
                            if($res) {
                                $totalamout = ($res->price * $res->stock);
                                $order_item_arr = [

                                    'order_id' => $this->lastorderid['id'],
                                    
                                    'order_uid' => $this->lastorderid['uuid'],
                                    
                                    'user_id' => $res->user_id,

                                    'product_id' => $res->product_id,

                                    'varition_id' => $res->varientid,
                                    
                                    'price' => $res->price,
                                    
                                    'stock' => $res->stock,
                                    
                                    'total' => $totalamout,

            

                                ];
                                $insert_order_item[] = $order_item_arr;
                            }               
                        }
                    }

                    $Orderitemvalue =  order_item::insert($insert_order_item);

                    $Comment_arr = [

                    'user_id' => $user_id,
                    
                    'message' => 'This customer placed order failed #'.$lastorderid->id,
                ];


                CustomerComment::create($Comment_arr);

               Session::flash('success', 'Payment failed!');

         }

         if ($request->redirect_status == 'pending') {

             $user_id =  Auth::user()->id;

                    $ordershipping = OrderShipping::where('user_id',$user_id)->first();

                    $this->Cart = Cart::where('user_id',$user_id)->get();

                     $Order_insert = orders::insert(
                        $order_arr = [


                                'user_id' => $user_id,
                                
                                'uuid' => '1',
                                
                                'transactionid' => $request->get('payment_intent'),

                                'netamout' => $ordershipping['netamout'],

                                'paymentstatus' => 'pending',
                                
                                'first_name' => $ordershipping['first_name'],

                                'last_name' => $ordershipping['last_name'],
                                
                                'address' => $ordershipping['address'],
                                
                                'company' => $ordershipping['company'],
                                'unit_number' => $ordershipping['unit_number'],
                                'city' => $ordershipping['city'],
                                'country' => $ordershipping['country'],
                                'pincode' => $ordershipping['pincode'],
                                'mobile' => $ordershipping['mobile'],
                                'billing_type' => $ordershipping['billing_type'],
                                'b_first_name' => $ordershipping['b_first_name'],
                                'b_last_name' => $ordershipping['b_last_name'],
                                'b_address' => $ordershipping['b_address'],
                                'b_company' => $ordershipping['b_company'],
                                'b_unit_number' => $ordershipping['b_unit_number'],
                                'b_city' => $ordershipping['b_city'],
                                'b_country' => $ordershipping['b_country'],
                                'b_pincode' => $ordershipping['b_pincode'],
                                'b_mobile' => $ordershipping['b_mobile'],
                                'b_billing_type' => $ordershipping['b_billing_type'],

                            ]
                        );


                    if($Order_insert){
                    // Insert Record Order Item
                        $this->lastorderid = Orders::where('user_id',$user_id)->orderBy('id', 'DESC')->first();

                        $insert_order_item =[];
                        foreach($this->Cart as $res) {         
                            if($res) {
                                $totalamout = ($res->price * $res->stock);
                                $order_item_arr = [

                                    'order_id' => $this->lastorderid['id'],
                                    
                                    'order_uid' => $this->lastorderid['uuid'],
                                    
                                    'user_id' => $res->user_id,

                                    'product_id' => $res->product_id,

                                    'varition_id' => $res->varientid,
                                    
                                    'price' => $res->price,
                                    
                                    'stock' => $res->stock,
                                    
                                    'total' => $totalamout,

            

                                ];
                                $insert_order_item[] = $order_item_arr;
                            }               
                        }
                    }

                    $Orderitemvalue =  order_item::insert($insert_order_item);

                    $Comment_arr = [

                    'user_id' => $user_id,
                    
                    'message' => 'This customer placed order Pendding #'.$lastorderid->id,
                ];


                CustomerComment::create($Comment_arr);

             Session::flash('success', 'Payment pending!');
         }
        
         return redirect('/');

    }

    public function editshipping()
    {
        $this->view = false;
        $this->editMode = true;

    }


}
