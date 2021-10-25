<?php

namespace App\Http\Livewire\Order;

use Livewire\Component;

use App\Models\Orders;

use App\Models\order_item;


class Order extends Component
{

    public $order,$OrderItem;

    public function mount() {

       $this->order = Orders::with('user')->get();
       $this->OrderItem = order_item::All();

    }

    public function render()
    {
        return view('livewire.order.order');
    }
}
