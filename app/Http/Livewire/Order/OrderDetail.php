<?php

namespace App\Http\Livewire\Order;

use Livewire\Component;

use App\Models\Product;

use App\Models\Orders;

use App\Models\order_item;

use App\Models\VariantStock;

use App\Models\ProductComment;

use App\Models\ProductVariant;

use App\Models\tax;

class OrderDetail extends Component
{
    public $order,$OrderItem,$Taxes,$messagetext;

    public function mount($id) {

       $this->order = Orders::with('user')->Where('id', $id)->first();

       $this->commentget = ProductComment::where('order_id',$this->order['id'])->get();

       $this->Taxes = tax::where('id',1)->first();

       $this->OrderItem = order_item::with('order_product')->with('media_product')->where('order_id',$id)->get();


    }

    public function ordercommentpost()
    {

        $Comment_arr = [

            'order_id' => $this->order['id'],
            
            'message' => $this->messagetext,
        ];


        ProductComment::create($Comment_arr);

        $this->messagetext = '';

        session()->flash('message', 'Post Created.');

    }
    

    public function render()
    {
        return view('livewire.order.order-detail');
    }
}
