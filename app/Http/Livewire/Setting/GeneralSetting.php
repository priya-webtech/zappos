<?php

namespace App\Http\Livewire\Setting;

use App\Models\Country;
use App\Models\CustomerAddress;
use App\Models\CustomerDetail;
use App\Models\Tag;
use App\Models\User;
use App\Models\General;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class GeneralSetting extends Component
{
    public $General, $store_name, $phonenumber, $sender_email, $front_logo, $backend_logo;

    /*protected $rules = [
        'store_name' => ['required', 'string', 'max:255'],
        'sender_email' => ['required', 'string', 'max:255'],
        'front_logo' => ['required'],
        'backend_logo' => ['required'],
    ];*/

    public function mount()
    {

    }

    public function render()
    {

        $this->General = General::where('id','1')->first();

       /* $this->store_name = $General->site_name;
        $this->sender_email = $General->email;
        $this->phonenumber = $General->mobile_number;
        $this->front_logo = $General->front_logo;
        $this->backend_logo = $General->backend_logo;*/
        return view('livewire.setting.general-setting');
    }

    public function updatestore(Request $request)
    {
        $user = General::where('id','1')->first();


        if ($image = $request->file('front_logo')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $front_logo = $image->move($destinationPath, $profileImage);
            $user->front_logo    = $front_logo;
            $user->save();
        }

        if ($image = $request->file('backend_logo')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $backend_logo = $image->move($destinationPath, $profileImage);
            $user->backend_logo    = $backend_logo;
            $user->save();
        }

        $user->site_name     = $request['store_name'];
        $user->email         = $request['sender_email'];
        $user->mobile_number = $request['phonenumber'];
        $user->save();

      //  $front_logo   = $this->front_logo;
      //  $backend_logo = $this->backend_logo;

        /*$dataValid = $this->validate([
            'backend_logo' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
            'front_logo'   => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
        ]);*/

            /*$user->update([
                $dataValid['front_logo']     => $this->front_logo->store('todos', 'public'),
                $dataValid['backend_logo']   => $this->backend_logo->store('todos', 'public'),
            ]);*/


        //$this->updateMode = false;
        session()->flash('message', 'Address Updated Successfully.');
        return redirect(route('setting.general-setting'));
    }
}
