<?php

namespace App\Services;

use App\Enums\OrderType;
use App\Models\Order;
use App\Repositories\OrderDocumentRepository;
use App\Repositories\OrderRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class OrderService
{
    /**
     * Create a new class instance.
     */
    public function __construct(private OrderRepository $orderRepository)
    {
    }

    public function todayOrderCount(int $userId): int
    {
        return $this->orderRepository->todayOrderCount($userId);
    }

    public function overDueInvoiceCount(int $userId): int
    {
        return $this->orderRepository->overDueInvoiceCount($userId);
    }

    public function overPerMonthCount(int $userId): int
    {
        return $this->orderRepository->overPerMonthCount($userId);
    }

    public function completedMonthCount(int $userId): int
    {
        return $this->orderRepository->completedMonthCount($userId);
    }

    public function inProgressCount(int $userId): int
    {
        return $this->orderRepository->inProgressCount($userId);
    }

    public function pendingInvoiceCount(int $userId): int
    {
        return $this->orderRepository->pendingInvoiceCount($userId);
    }

    public function recentOrders(int $userId): Collection
    {
        return $this->orderRepository->recentOrders($userId);
    }

    public function create(int $orderType,int $priority): int
    {
        $order = new Order();
        $order->user_id = auth()->user()->id;
        $order->order_type = $orderType;
        $order->priority = $priority;
        $order->save();

        return $order->id;
    }
}
