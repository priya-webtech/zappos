<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;

use App\Models\Cart;

use App\Models\Product;

use App\Models\Orders;

use App\Models\VariantStock;

use App\Models\ProductVariant;

use App\Models\order_item;

use App\Models\OrderShipping;

use Illuminate\Http\Request;

class CheckoutInsertOrder extends Component
{
    public $Cart,$lastorderid,$locatioinstock;

    public function mount()
    {
        $this->Cart = Cart::where('user_id',1)->get();
    }

    public function render()
    {
        
        //return view('livewire.stripe-paymnet-controller', [ 'orderid' => $this->lastorderid['id']]);
    }

    public function checkoutInsert(Request $Request)
    {

        $cartid_arr = $Request->cartid;

        $netamout  = $Request->total_price;


        $user_id =  Auth::user()->id;
        $this->Cart = Cart::where('user_id',$user_id)->get();

        $Deleteoldshipping =  OrderShipping::where('user_id',$user_id)->delete();
        
        if($this->Cart){
         $Order_insert = OrderShipping::insert(
            $order_arr = [


                    'user_id' => $user_id,
                    
                    'transactionid' => '0',

                    'netamout' => $netamout,

                    'paymentstatus' => 'pending'

                ]
            );

           return redirect(route('front-checkout'));
        }
            /*if($Order_insert){
                // Insert Record Order Item
                $this->lastorderid = Orders::orderBy('id', 'DESC')->first();

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

           $Orderitemvalue =  order_item::insert($insert_order_item);*/

    }
}
