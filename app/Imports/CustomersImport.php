<?php

namespace App\Imports;

use App\Models\CustomerAddress;
use App\Models\CustomerDetail;
use App\Models\Tag;
use App\Models\User;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithValidation;

class CustomersImport implements ToModel, WithHeadingRow, WithValidation
{
    use Importable;



    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required'],
            'password'=> ['required'],
            'company' => ['required', 'string', 'max:255'],
            'address1' => ['required', 'string', 'max:255'],
            'address2' => ['required', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'province' => [''],
            'province_code' => [''],
            'country' => ['required'],
            'country_code' => [''],
            'zip' => ['required'],
            'phone' => ['required'],
            'accept_marketing' => ['required'],
            'total_spent' => [''],
            'total_orders' => [''],
            'tags' => [''],
            'note' => [''],
            'tax_exempt' => ['required'],
        ];
    }
    public function withValidator($validator)
    {
        $messages = $validator->messages();
        if ($validator->fails())
        {
//            dd($messages);
//            session()->fla    sh('message','Something went wrong!!! Try Again...');
            return back()->with('message', 'Please Follow the validation rules...');
//          /*  $failed = $validator->failed();
//            $messages = $validator->messages();*/
//
        }


    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $overwrite = request()->input('overwrite_customers');

        $customer = [
            'first_name' => $row['first_name'],
            'last_name' => $row['last_name'],
            'password'=> Hash::make($row['password']),
        ];
        $customer_detail = [
            'agreed_to_receive_marketing_mails' => $row['accept_marketing'],
            'collect_tax' => $row['tax_exempt'],
            'note' => $row['note'],
            'tags' => $row['tags']
        ];
        $customer_address = [
            'company' => $row['company'],
            'address' => $row['address1'],
            'apartment' => $row['address2'],
            'city' => $row['city'],
            'country' => $row['country'],
            'postal_code' => $row['zip'],
            'address_type' => 'shipping_address',
            'is_billing_address' => 'no'
        ];
        $exist = User::where('email', $row['email'])->orWhere('mobile_number', $row['phone'])->first();

       if (empty($exist)) {

            $customer['email'] = $row['email'];
            $customer['mobile_number'] = $row['phone'];
            $user = User::create($customer);

            if ($user) {
                $user->assignRole('customer');
                $customer_detail['user_id'] = $user->id;

                if (!empty($customer_detail['tags'])) {
                    $customer_detail['tags'] = strtolower($customer_detail['tags']).',';
                    $tags_arr = explode(",", $customer_detail['tags']);
                    $create_tag = [];
                    foreach ($tags_arr as $tag) {
                        $tag = trim($tag);
                        $exist = Tag::where('label', $tag)->first();

                        if (empty($exist)) {
                            $create_tag[] = ['label'=>$tag];
                        }
                    }
                    Tag::insert($create_tag);
                }

                CustomerDetail::create($customer_detail);

                $customer_address['user_id'] = $user->id;
                CustomerAddress::create($customer_address);
            }


        } else {

            if($overwrite) {
                $exist->update($customer);
                CustomerDetail::where('user_id', $exist->id)->update($customer_detail);
                CustomerAddress::where('user_id', $exist->id)->update($customer_address);
            }
        }
         session()->flash('message','Record Updated!!!');

    }
    public function headings(): array
    {
        return [
            'First Name',
            'Last Name',
            'Email',
            'Company',
            'Address1',
            'Address2',
            'City',
            'Country',
            'Zip',
            'Phone',
            'Accept Marketing',
            'Tags',
            'Note',
            'Tax Exempt'
        ];
    }
}
