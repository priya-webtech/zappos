<?php
namespace App\Http\Livewire\Customer;



use Livewire\Component;

use App\Models\Country;

use App\Models\CustomerDetail;

use App\Models\CustomerAddress;

use App\Models\Tag;

use App\Models\User;

use Illuminate\Http\Request;

use Illuminate\Support\Str;



class Details extends Component

{

    public $uuid, $customer, $countries, $tags, $customerData, $first_name, $last_name ,$address_id, $collect_tax, $agreed_to_receive_marketing_mails, $customerAddress = [], $customerBillingAddress = [], $address;



    protected $listeners = ['update'];



     protected $rules = [

        'customerData.detail.collect_tax' => [],
        
        'customerData.detail.email_marketing_status' => [],

        'customerData.first_name'=> [],

        'customerData.last_name'=> [],

        'customerData.email'=> [],

        'customerData.mobile_number'=> [],

        'customerData.detail.note' => [],

        'customerData.detail.agreed_to_receive_marketing_mails' => [],

        'customerData.detail.tags' => [],

    ];

  

    

    public function mount($id) {

        $this->uuid = $id;

        $this->initial();

    }



    public function initial()

    {

        $this->customer = User::with(['detail','address'])->where('uuid',$this->uuid)->first()->toArray();

        $this->customerData = $this->customer;

        $this->countries = Country::all();

        $this->tags = Tag::whereNotIn('label', explode(',',$this->customerData['detail']['tags']))->get();

        

        if($this->customerData['detail']['collect_tax'] == 'yes') {

            $this->customerData['detail']['collect_tax'] = true;



        } else {

            $this->customerData['detail']['collect_tax'] = false;



        }



        if($this->customerData['detail']['agreed_to_receive_marketing_mails'] == 'yes') {

            $this->customerData['detail']['agreed_to_receive_marketing_mails'] = true;



        } else {

            $this->customerData['detail']['agreed_to_receive_marketing_mails'] = false;



        }

    }



    public function render()

    {

        return view('livewire.customer.details');

    }



    public function store()
    {
        $data = $this->customerBillingAddress;

        if(empty($this->customerBillingAddress->country)) {

            $data['country'] = $this->countries[0]->name;

        }

        $data['user_id'] = $this->customerData['id'];

        $data['address_type'] = 'billing_address';

        $data['is_billing_address'] = 'no';

        CustomerAddress::create($data);

        $this->resetInputFields();


        session()->flash('message', 'Address Created Successfully.');



        $this->initial();

    }



    public function EditAddress($id)

    {

        $this->customerAddress = CustomerAddress::where('id',$id)->first()->toArray();

        $this->address = $this->customerAddress;

        $this->address_id = $id;

        

    }





    public function delete()

    {

        CustomerAddress::find($this->address_id)->delete();

        $this->initial();

    }



    public function update($flag, $params = null)

    {

        if($flag == 'customer-note')

        {



            CustomerDetail::where('user_id', $this->customerData['id'])->update([

                    'note' => $this->customerData['detail']['note']

                ]);

        

            session()->flash('message', 'Users Updated Successfully.');

            // $this->customer = $this->customerData;

        }

        

        if($flag == 'Address-change')

        {

            if ($this->address_id) {

                $user = CustomerAddress::find($this->address_id);

                $user->update($this->customerAddress);



                session()->flash('message', 'Address Updated Successfully.');

                // $this->customer = $this->customerData;



            }

        }



        if($flag == 'email-change')

        {

            User::where('id', $this->customerData['id'])->update(

                [

                    'first_name'    => $this->customerData['first_name'],

                    'last_name'     => $this->customerData['last_name'],

                    'email'         => $this->customerData['email'],

                    'mobile_number' => $params

                ]

            );

        

            session()->flash('message', 'Users Updated Successfully.');

            // $this->customer = $this->customerData;

        }



        if($flag == 'collect_tax')

        {

            if ($this->customerData['detail']['collect_tax'] == 'no') {

                $tax = 'yes';

            } 

            else {

                $tax = 'no';

            }

                CustomerDetail::where('user_id', $this->customerData['id'])->update([

                    'collect_tax' =>  $tax

                ]);

        

            // $this->customer = $this->customerData;



            session()->flash('message', 'Users Updated Successfully.');

        }



        if($flag == 'email_marketing_status')

        {

            if ($this->customerData['detail']['agreed_to_receive_marketing_mails'] == 'no') {

                $marketing_status = 'yes';

            } else {

                $marketing_status = 'no';

            }

                CustomerDetail::where('user_id', $this->customerData['id'])->update([

                    'agreed_to_receive_marketing_mails' => $marketing_status

                ]);

        

            session()->flash('message', 'Email Marketing Status Updated Successfully.');

            // $this->customer = $this->customerData;

        }



        if($flag == 'tags-change')

        {

            if (!empty($params)) {



                CustomerDetail::where('user_id', $this->customerData['id'])->update(['tags'  => $params]);

                session()->flash('message', 'Users Updated Successfully.');

            

            }



        }

        if($flag == 'tag-change')

        {

            if (!empty($params)) {

                $params = ucfirst(trim($params));



                $customer_tags = explode(',', $this->customerData['detail']['tags']);



                if(!in_array($params, $customer_tags)) 

                {



                    $tags = empty($this->customerData['detail']['tags']) ? $params : $this->customerData['detail']['tags'].','.$params;

                    CustomerDetail::where('user_id', $this->customerData['id'])->update(['tags'  => $tags]);

                    $exist = Tag::where('label',  $params)->first();

                    if (empty($exist)) {

                        Tag::insert(['label'=>$params]);

                    }

                }

                

                session()->flash('message', 'Users Updated Successfully.');

            

            }



        }

        if($flag == 'remove-tag')

        {

            if (!empty($params)) {



                $customer_tags = explode(',', $this->customerData['detail']['tags']);

                if (($key = array_search($params, $customer_tags)) !== false) {

                    unset($customer_tags[$key]);

                }

                $customer_tags = implode(',', $customer_tags);

                CustomerDetail::where('user_id', $this->customerData['id'])->update(['tags'  => $customer_tags]);

               

                session()->flash('message', 'Users Updated Successfully.');

            

            }



        }

        $this->initial();



    }



    public function resetInputFields() {

         $this->customerAddress = $this->address;

    }



}

