<?php

namespace App\Livewire;

use App\Models\Order;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Attributes\On;

class ShowOrder extends Component
{
    public string $orderId = '';

    public function render()
    {
        $orderDetails = Order::find((int) $this->orderId);

        return view('livewire.show-order', ['orderId' => $this->orderId, 'orderDetails' => $orderDetails]);
    }

    #[On('show_order')]
    public function showOrder(string $orderId)
    {
        $this->orderId = $orderId;
    }
}
