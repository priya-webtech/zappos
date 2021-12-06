<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\User;
use App\Models\CustomerAddress;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Field;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Models\Country;
use App\Models\Orders;
use App\Models\tax;
use App\Models\order_item;
use Illuminate\Support\Facades\Hash;

class Account extends Component
{
	protected $listeners = ['mount'];
	public $user_id,$editupdate,$customer,$Taxes,$UserDetail,$email,$reemail,$password,$repassword,$newpassword,$currpassword,$countries,$first_name,$last_name,$city,$address,$apartment,$company,$country,$postal_code,$mobile_no,$address_type,$order,$OrderItem,$EditShippingAddress,$editaddress,$addressid,$showItem;

    public $bfirst_name,$blast_name,$bcity,$baddress,$bapartment,$bcompany,$bcountry,$bpostal_code,$bmobile_no,$baddress_type,$customer_billing,$billing_address,$billingaddressvalue = 'billingaddress',$shippingaddressvalue ='shippingaddress';

    public $updateMode = false;


        protected $rules = [

        'editaddress.first_name' => ['required'],
        'editaddress.last_name' => ['required'],
        'editaddress.address' => ['required'],
        'editaddress.apartment' => ['required'],
        'editaddress.city' => ['required'],
        'editaddress.country' => ['required'],
        'editaddress.postal_code' => ['required'],
        'editaddress.address_type' => ['required'],
        'editaddress.company' => [],
        'editaddress.mobile_no' => [],
        'editaddress.is_billing_address' => [],
        'UserDetail.first_name' => ['required'],
        'UserDetail.last_name' => ['required'],
    ];


	public function mount()
	{
        $this->updateMode= false;
		if (Auth::check()) {
            $this->ManageUser();
            $this->order = Orders::where('transactionid','!=','0' )->where('user_id',$this->user_id)->get();
            $this->OrderItem = order_item::where('user_id',$this->user_id)->get();
            $this->Taxes = tax::where('id',1)->first();
            $this->showItem = order_item::with('order_product')->with('media_product')->where('user_id',$this->user_id)->get();

        }
	}
    public function render()
    {
      
        return view('livewire.front.account');
    }

    public function ManageUser()
    {
    	$this->user_id =  Auth::user()->id;
    	$this->countries = Country::all();
    	$this->Taxes = tax::where('id',1)->first();
		$this->UserDetail = User::where('id', $this->user_id)->first();
		$this->customer = User::with(['detail','address'=>function($query) {

            $query->where('address_type','shipping_address');

        }])->where('id',$this->user_id)->first()->toArray();

        $this->customer_billing = User::with(['detail','address'=>function($query) {

            $query->where('address_type','shipping_address')->where('is_billing_address','yes')->orderBy('id', 'DESC');

        }])->where('id',$this->user_id)->orderBy('id', 'DESC')->first()->toArray();


        $this->billing_address = User::with(['detail','address'=>function($query) {

            $query->where('address_type','billing_address')->orderBy('id', 'DESC');

        }])->where('id',$this->user_id)->orderBy('id', 'DESC')->first()->toArray();



        $this->order = Orders::with('UserOrder')->where('transactionid','!=','0' )->get();


    }

    public function SaveShipping()
    {

        $this->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'address' => ['required'],
            'last_name' => ['required'],
            'apartment' => ['required'],
            'city' => ['required'],
            'country' => ['required'],
            'postal_code' => ['required'],
            'address_type' => [],
            'mobile_no' => ['between:10,12|numeric']
        ]);


    	if($this->address_type == true){
    		$shippingAddress = 'shipping_address';
            $is_billing_address = 'yes';

            CustomerAddress::where('user_id',$this->user_id)->where('address_type','shipping_address')->update([ 

                'is_billing_address' => 'no',
            ]);

            $ship_arr = [

                    'user_id' => $this->user_id,
                    
                    'first_name' => $this->first_name,

                    'last_name' => $this->last_name,
                    
                    'address' => $this->address,
                    
                    'apartment' => $this->apartment,
                    
                    'city' => $this->city,
                    
                    'company' => $this->company,

                    'country' => $this->country,
                    
                    'postal_code' => $this->postal_code,
                    
                    'mobile_no' => $this->mobile_no,
                    
                    'address_type' => $shippingAddress,
                   
                    'is_billing_address' => $is_billing_address,
                ];


        CustomerAddress::create($ship_arr);

    	}else{
            $shippingAddress = 'shipping_address';
    		$is_billing_address = 'no';

            $ship_arr = [

                    'user_id' => $this->user_id,
                    
                    'first_name' => $this->first_name,

                    'last_name' => $this->last_name,
                    
                    'address' => $this->address,
                    
                    'apartment' => $this->apartment,
                    
                    'city' => $this->city,
                    
                    'company' => $this->company,

                    'country' => $this->country,
                    
                    'postal_code' => $this->postal_code,
                    
                    'mobile_no' => $this->mobile_no,
                    
                    'address_type' => $shippingAddress,
                   
                    'is_billing_address' => $is_billing_address,
                ];


        CustomerAddress::create($ship_arr);
    	}
    	
     
        $this->emit('AddNewShippingAddresshide');
        session()->flash('add_shipp', 'shipping Address Added !!');

         $this->mount();
        
    }

    public function SaveBilling()
    {

        $this->validate([
            'bfirst_name' => ['required'],
            'blast_name' => ['required'],
            'baddress' => ['required'],
            'blast_name' => ['required'],
            'bapartment' => ['required'],
            'bcity' => ['required'],
            'bcountry' => ['required'],
            'bcompany' => [],
            'bpostal_code' => ['required'],
            'baddress_type' => [],
            'bmobile_no' => ['between:10,12|numeric']

        ]);

        if($this->baddress_type == true){
            $billing_address = 'billing_address';
            $is_billing_address = 'yes';

            CustomerAddress::where('user_id',$this->user_id)->where('address_type','billing_address')->update([ 

                'is_billing_address' => 'no',
            ]);

            $bill_arr = [

                    'user_id' => $this->user_id,
                    
                    'first_name' => $this->bfirst_name,

                    'last_name' => $this->blast_name,
                    
                    'address' => $this->baddress,
                    
                    'apartment' => $this->bapartment,
                    
                    'city' => $this->bcity,
                    
                    'company' => $this->bcompany,

                    'country' => $this->bcountry,
                    
                    'postal_code' => $this->bpostal_code,
                    
                    'mobile_no' => $this->bmobile_no,
                    
                    'address_type' => $billing_address,
                   
                    'is_billing_address' => $is_billing_address,
                ];

        CustomerAddress::create($bill_arr);

        }else{
            $billing_address = 'billing_address';
            $is_billing_address = 'no';

            $bill_arr = [

                'user_id' => $this->user_id,
                
                'first_name' => $this->bfirst_name,

                'last_name' => $this->blast_name,
                
                'address' => $this->baddress,
                
                'apartment' => $this->bapartment,
                
                'city' => $this->bcity,
                
                'company' => $this->bcompany,

                'country' => $this->bcountry,
                
                'postal_code' => $this->bpostal_code,
                
                'mobile_no' => $this->bmobile_no,
                
                'address_type' => $billing_address,
               
                'is_billing_address' => $is_billing_address,
            ];
        }
        
        
        $this->mount();
        $this->emit('AddBillingAddresshide'); // Close modal "deleteconfirm"

        session()->flash('add_bill', 'Billing Address Added !!');

         
    }

    public function billingedit($id){

        $this->updateMode = true;
        $this->editaddress = CustomerAddress::find($id);
        $this->addressid = $this->editaddress->id;
        if($this->editaddress['is_billing_address'] == 'yes') {
            $this->baddress_type = true;
        } else {
            $this->baddress_type = false;
        }
         $this->emit('editbillingAddresshow');

    }

    public function shippingedit($id){

        $this->updateMode = true;
        $this->editaddress = CustomerAddress::find($id);
        $this->addressid = $this->editaddress->id;
        if($this->editaddress['is_billing_address'] == 'yes') {
            $this->address_type = true;
        } else {
            $this->address_type = false;
        }
         $this->emit('editShippingAddressshow');

    }

    public function acountupdate($id)
    {

        $this->validate([
            'editaddress.first_name' => ['required'],
            'editaddress.last_name' => ['required'],
            'editaddress.address' => ['required'],
            'editaddress.apartment' => ['required'],
            'editaddress.city' => ['required'],
            'editaddress.country' => ['required'],
            'editaddress.postal_code' => ['required'],
            'editaddress.address_type' => [],
            'editaddress.company' => [],
            'editaddress.mobile_no' => ['between:10,12|numeric'],
            'editaddress.is_billing_address' => [],

        ]);

        if($this->baddress_type == true){
            $shippingAddress = 'billing_address';
             $is_billing_address = 'yes';

             CustomerAddress::where('id',$id)->update([

                'first_name' => $this->editaddress->first_name,

                'last_name' => $this->editaddress->last_name,
                
                'address' => $this->editaddress->address,
                
                'apartment' => $this->editaddress->apartment,
                
                'city' => $this->editaddress->city,
                
                'company' => $this->editaddress->company,

                'country' => $this->editaddress->country,
                
                'postal_code' => $this->editaddress->postal_code,
                
                'mobile_no' => $this->editaddress->mobile_no,
                
                'address_type' => $shippingAddress,
                
                'is_billing_address' => $is_billing_address,
            ]);

             CustomerAddress::where('id','!=',$id)->where('user_id',$this->user_id)->where('address_type','billing_address')->update([ 

                'is_billing_address' => 'no',
            ]);

        }else{
            $shippingAddress = 'billing_address';
             $is_billing_address = 'no';

              CustomerAddress::where('id',$id)->update([

                'first_name' => $this->editaddress->first_name,

                'last_name' => $this->editaddress->last_name,
                
                'address' => $this->editaddress->address,
                
                'apartment' => $this->editaddress->apartment,
                
                'city' => $this->editaddress->city,
                
                'company' => $this->editaddress->company,

                'country' => $this->editaddress->country,
                
                'postal_code' => $this->editaddress->postal_code,
                
                'mobile_no' => $this->editaddress->mobile_no,
                
                'address_type' => $shippingAddress,
                
                'is_billing_address' => $is_billing_address,
            ]);
        }

        
        $this->mount();
        session()->flash('editbill', 'Record Updated !!');
    }

    public function update($id)
    {

        $this->validate([
            'editaddress.first_name' => ['required'],
            'editaddress.last_name' => ['required'],
            'editaddress.address' => ['required'],
            'editaddress.apartment' => ['required'],
            'editaddress.city' => ['required'],
            'editaddress.country' => ['required'],
            'editaddress.postal_code' => ['required'],
            'editaddress.address_type' => [],
            'editaddress.company' => [],
            'editaddress.mobile_no' => ['between:10,12|numeric'],

        ]);

        if($this->address_type == true){
            $shippingAddress = 'shipping_address';
            $is_billing_address = 'yes';

            CustomerAddress::where('id',$id)->update([


            'first_name' => $this->editaddress->first_name,

            'last_name' => $this->editaddress->last_name,
            
            'address' => $this->editaddress->address,
            
            'apartment' => $this->editaddress->apartment,
            
            'city' => $this->editaddress->city,
            
            'company' => $this->editaddress->company,

            'country' => $this->editaddress->country,
            
            'postal_code' => $this->editaddress->postal_code,
            
            'mobile_no' => $this->editaddress->mobile_no,
            
            'address_type' => $shippingAddress,
            
            'is_billing_address' => $is_billing_address,
        ]);

            CustomerAddress::where('id','!=',$id)->where('user_id',$this->user_id)->where('address_type','shipping_address')->update([ 

                'is_billing_address' => 'no',
            ]);
        }else{
            $shippingAddress = 'shipping_address';
            $is_billing_address = 'no';

            CustomerAddress::where('id',$id)->update([


            'first_name' => $this->editaddress->first_name,

            'last_name' => $this->editaddress->last_name,
            
            'address' => $this->editaddress->address,
            
            'apartment' => $this->editaddress->apartment,
            
            'city' => $this->editaddress->city,
            
            'company' => $this->editaddress->company,

            'country' => $this->editaddress->country,
            
            'postal_code' => $this->editaddress->postal_code,
            
            'mobile_no' => $this->editaddress->mobile_no,
            
            'address_type' => $shippingAddress,
            
            'is_billing_address' => $is_billing_address,
        ]);
        }


        
        $this->mount();
        session()->flash('editship', 'Record Updated !!');

    }
     
    public function deleteship($addid)
    {   
       $deleteRecord = CustomerAddress::find($addid)->delete();
       if($deleteRecord){
        $this->mount();
        session()->flash('deleteshipmessage', 'Record Deleted !!');
        return redirect(route('front-user-detail'));
       }
    }

    public function UpdateUser($flag)
    {

    	if($flag == 'updatename'){

    		User::where('id',$this->user_id)->update([

    			'first_name' => $this->UserDetail->first_name,
    			'last_name' => $this->UserDetail->last_name,

    		]);

    		session()->flash('name_email_password_message', 'Record Updated!!');
    	}

    		
    	if($flag == 'updateemail'){
        $this->validate([
            'email' => ['required'],
            'reemail' => ['required'],
            'password' => ['required','regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/','min:8']
            ]);
    		
    		if($this->reemail)
			{
				if($this->email == $this->reemail){
					if(Hash::check($this->password, $this->UserDetail->password)) {
						User::where('id',$this->user_id)->update(['email' => $this->email]);
                        session()->flash('name_email_password_message', 'Record Updated!!');
					}else{
						//dd('Invalid password');
						session()->flash('emailpassword', 'Password Invalid !!');
					}
					
				}else{
					//dd('Not same Email');
					session()->flash('emailpassword', 'Password Wrong !!');
				}
			}
    	}

    	if($flag == 'updatepassword'){
            $this->validate([
            'repassword' => ['required','same:newpassword','regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/','min:8'],
            'newpassword' => ['required','regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/','min:8'],
            'currpassword' => ['required','regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/','min:8'],
            ]);

    		if(Hash::check($this->currpassword, $this->UserDetail->password))
			{
				if($this->newpassword == $this->repassword){

					$hashedPassword = Hash::make($this->newpassword);
					User::where('id',$this->user_id)->update(['password' => $hashedPassword]);
					//dd('change');
                    session()->flash('name_email_password_message', 'Record Updated!!');
				}else{
					//dd('Not same Email');
					session()->flash('message', 'Not Same Email Address !!');
				}
                    
			}else{
				session()->flash('oldpassworderror', 'Old Password Not Match !!');
			}
    	}
    }
}
