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

class CheckoutInsertOrder extends Component
{
    public $Cart,$lastorderid,$locatioinstock;

    public function mount()
    {
        $this->Cart = Cart::where('user_id',1)->get();

        $netamout = 0;
        foreach($this->Cart as $res){
            $totalamout = $res->price * $res->stock;
            $netamout += $totalamout;
        }  


         $Order_insert = Orders::insert(
            $order_arr = [

                    'uuid' => '1',

                    'transactionid' => '0',

                    'netamout' => $netamout,

                    'paymentstatus' => 'pending'

                ]
            );

            if($Order_insert){
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

           $Orderitemvalue =  order_item::insert($insert_order_item);


            return redirect(route('payment',$this->lastorderid['id'])); 
    }

    public function render()
    {
        
        
        //return view('livewire.stripe-paymnet-controller', [ 'orderid' => $this->lastorderid['id']]);
    }
}
