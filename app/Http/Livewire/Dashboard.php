<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\favorite;
use App\Models\ProductMedia;
use Livewire\Component;

class Dashboard extends Component
{
    public $product,$Productmediass,$user_id;

    public function mount()
    {
        if (Auth::check()) {
            $this->user_id =  Auth::user()->id;
        }
        $this->Productmediass = ProductMedia::all()->groupBy('product_id')->toArray();
        $this->Product = Product::with('productmediaget')->with('favoriteget')->orderBy('id','asc')->limit(6)->get();
    }

    public function UpdateWish($id,$productid) {
        if (Auth::check()) {

            if($id == 0){
                    $favorite_arr = [
                            
                            'product_id' => $productid,

                             'user_id' => $this->user_id,

                            'status' => '1',
                        ];

                    favorite::create($favorite_arr);

                
            }else{

                $favorite  = favorite::where('id',$id)->delete();

                }
        }
    }

    public function render()
    {
        return view('livewire.dashboard');
    }

}
