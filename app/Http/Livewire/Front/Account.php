<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\User;
use App\Models\CustomerAddress;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Models\Country;
use App\Models\Orders;
use App\Models\tax;
use App\Models\order_item;
use Illuminate\Support\Facades\Hash;

class Account extends Component
{
	protected $listeners = ['ManageUser'];
	public $user_id,$customer,$Taxes,$UserDetail,$email,$reemail,$password,$repassword,$newpassword,$currpassword,$countries,$first_name,$last_name,$city,$address,$apartment,$company,$country,$postal_code,$mobile_no,$address_type,$order,$OrderItem,$EditShippingAddress,$editaddress,$addressid;

    public $updateMode = false;

	protected $rules = [
        'UserDetail.first_name' => '',
        'UserDetail.last_name' => '',
        'email' => 'required|email|unique:User,email',
        'reemail' => 'required|email',
        'repassword' => 'required',
        'newpassword' => 'required',
        'currpassword' => 'required',
        'editaddress.first_name' => 'required',
        'editaddress.last_name' => '',
        'editaddress.company' => '',
        'editaddress.address' => '',
        'editaddress.apartment' => '',
        'editaddress.city' => '',
        'editaddress.country' => '',
        'editaddress.postal_code' => '',
        'editaddress.mobile_no' => '',
        'editaddress.address_type' => '',
        'editaddress.id' => '',
    ];


	public function mount()
	{
        $this->updateMode= false;
		if (Auth::check()) {
            $this->ManageUser();
            $this->OrderItem = order_item::with('order_product')->with('order')->with('media_product')->get();
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

        $this->order = Orders::with('UserOrder')->where('transactionid','!=','0' )->get();


    }
    public function SaveShipping()
    {
    	if($this->address_type == true){
    		$shippingAddress = 'shipping_address';
    	}else{
    		$shippingAddress = 'billing_address';
    	}
    	
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
                ];

        CustomerAddress::create($ship_arr);
        session()->flash('message', 'shipping Address Added !!');
    }
    public function shippingedit($id){
        $this->updateMode = true;
        $this->editaddress = CustomerAddress::find($id);
        $this->addressid = $this->editaddress->id;
    }
    public function update($id)
    {
        $validatedDate = $this->validate([
            'editaddress.first_name' => '',
            'editaddress.last_name' => '',
            'editaddress.address' => '',
            'editaddress.apartment' => '',
            'editaddress.city' => '',
            'editaddress.country' => '',
            'editaddress.postal_code' => '',
            'editaddress.address_type' => '',
        ]);

        $editupdate = CustomerAddress::find($id);

        if($editupdate->address_type == true){
            $shippingAddress = 'shipping_address';
        }else{
            $shippingAddress = 'billing_address';
        }

        CustomerAddress::where('id',$id)->update([

            'user_id' => $editupdate->id,
            
            'first_name' => $editupdate->first_name,

            'last_name' => $editupdate->last_name,
            
            'address' => $editupdate->address,
            
            'apartment' => $editupdate->apartment,
            
            'city' => $editupdate->city,
            
            'company' => $editupdate->company,

            'country' => $editupdate->country,
            
            'postal_code' => $editupdate->postal_code,
            
            'mobile_no' => $editupdate->mobile_no,
            
            'address_type' => $shippingAddress,
        ]);

        session()->flash('message', 'Edit shipping Address !!');
    }
    public function UpdateUser($flag)
    {

    	if($flag == 'updatename'){

    		User::where('id',$this->user_id)->update([

    			'first_name' => $this->UserDetail->first_name,
    			'last_name' => $this->UserDetail->last_name,

    		]);

    		session()->flash('message', 'Update Name !!');
    	}

    		
    	if($flag == 'updateemail'){
 
    		
    		if($this->reemail)
			{
				if($this->email == $this->reemail){
					if(Hash::check($this->password, $this->UserDetail->password)) {
						User::where('id',$this->user_id)->update(['email' => $this->email]);
					}else{
						//dd('Invalid password');
						session()->flash('message', 'Password Invalid !!');
					}
					
				}else{
					//dd('Not same Email');
					session()->flash('message', 'Not Same Email Address !!');
				}
			}
    	}

    	if($flag == 'updatepassword'){
 
    		if(Hash::check($this->currpassword, $this->UserDetail->password))
			{
				if($this->newpassword == $this->repassword){

					$hashedPassword = Hash::make($this->newpassword);
					User::where('id',$this->user_id)->update(['password' => $hashedPassword]);
					//dd('change');
					
				}else{
					//dd('Not same Email');
					session()->flash('message', 'Not Same Email Address !!');
				}
			}else{
				//dd('old password match');
			}
    	}
    }
}
