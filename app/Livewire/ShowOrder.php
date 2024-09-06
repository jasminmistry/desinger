<?php

namespace App\Livewire;

use App\Enums\RolesEnum;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Attributes\On;

class ShowOrder extends Component
{
    public string $orderId = '';
    public string $status = '';
    public string $priority = '';
    public string $userId = '';

    public function render()
    {
        $orderDetails = Order::find((int) $this->orderId);
        $assignedUsers = User::whereHas('roles', function ($query) {
            return $query->whereNotIn('name',[RolesEnum::CUSTOMER->value, RolesEnum::GUEST->value]);
        })->get();

        return view('livewire.show-order', ['orderId' => $this->orderId, 'orderDetails' => $orderDetails, 'assignedUsers' => $assignedUsers]);
    }

    #[On('show_order')]
    public function showOrder(string $orderId)
    {
        $this->orderId = $orderId;
    }

    public function change()
    {
        $order = Order::find($this->orderId);
        $order->status = $this->status;
        $order->save();

        $this->dispatch('show_order', $this->orderId);
    }

    public function changePriority()
    {
        $order = Order::find($this->orderId);
        $order->priority = $this->priority;
        $order->save();

        $this->dispatch('show_order',$this->orderId);
    }

    public function changeAssign()
    {
        $order = Order::find($this->orderId);
        $order->user_id = $this->userId;
        $order->save();

        $this->dispatch('show_order',$this->orderId);
    }
}
