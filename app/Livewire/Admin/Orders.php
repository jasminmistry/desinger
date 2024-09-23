<?php

namespace App\Livewire\Admin;

use App\Enums\OrderStatus;
use App\Enums\RolesEnum;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Orders extends Component
{
    public function render()
    {
        $user = auth()->user();
        $orders = [];
        foreach(OrderStatus::cases() as $status) {
            $qb = Order::where('status', $status->value);
            if ($user->hasRole(RolesEnum::DESIGNER)) {
                $qb->where('assigned', $user->id);
            }

            $orders[$status->value] = $qb->get();
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
