<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Attributes\On;

class ShowOrder extends Component
{
    public string $orderId = '';

    public function render()
    {
        Log::info($this->orderId);
        return view('livewire.show-order', ['orderId' => $this->orderId]);
    }

    #[On('show_order')]
    public function showOrder(string $orderId)
    {
        $this->orderId = $orderId;
    }
}
