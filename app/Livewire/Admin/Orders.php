<?php

namespace App\Livewire\Admin;

use App\Enums\OrderStatus;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Orders extends Component
{
    public function render()
    {
        $orders = [];
        foreach(OrderStatus::cases() as $status) {
            $orders[$status->value] = Order::where('status', $status->value)->get();
        }

        return view('livewire.admin.orders', ['orders' => $orders]);
    }

    public function changeStatus($id, $status)
    {
        $order = Order::find($id);

        $order->status = $status;
        $order->save();
    }
}
