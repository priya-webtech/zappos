<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Product;
use App\Models\favorite;
use App\Models\ProductMedia;
use Livewire\Component;

class Dashboard extends Component
{
    public $product,$Productmediass,$user_id;

    protected $listeners = ['getProducts'];


    public function mount()
    {
        
        if (Auth::check()) {
            $this->user_id =  Auth::user()->id;

            

            // if (Auth::user()->hasRole('admin')) {
            //     return redirect('/admin');
            // }
        }
        $this->getProducts();
    }

    public function getProducts()
    {
        $this->Productmediass = ProductMedia::all()->groupBy('product_id')->toArray();

        $this->Product = Product::with('productmediaget')->with('favoriteget')->orderBy('id','asc')->limit(6)->get();

    }
    public function UpdateWish($value, $product_id) {

        if(!Auth::check()) {

             session()->flash('alert', 'You need to login');

        } else {
           
            if(!$value) {

                $favorite = favorite($product_id);
               
                favorite::where('id',$favorite->id)->delete();
                session()->flash('message', 'Item removed from WishList !!');

            } else {

                 $favorite_arr = [
                        
                    'product_id' => $product_id,

                    'user_id' => Auth::user()->id,

                    'status' => 1,
                    
                    ];

                favorite::create($favorite_arr);
                session()->flash('message', 'Item added in Wishlist');

            }

            $this->getProducts();
            $this->emit('getCart');

        }
       
    }

    public function refresh($value='')
    {
        return;
    }

    public function render()
    {
        // if(Session::has('alert')){
        //     Session::forget('alert');
        // }

       
        return view('livewire.dashboard');
    }

    
    // public function checkLogin()
    // {
    //     if (Auth::check() && Auth::user()->hasRole('admin')) {
    //         return redirect('/admin');
    //     } 
        
    // }

}
