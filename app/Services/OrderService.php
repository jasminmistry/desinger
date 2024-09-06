<?php

namespace App\Services;

use App\Enums\OrderType;
use App\Models\Order;
use App\Models\User;
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

    public function todayOrderCount(User $user): int
    {
        $userId = null;
        if (!$user->hasPermissionTo('view orders')) {
            $userId = $user->id;
        }
        return $this->orderRepository->todayOrderCount($userId);
    }

    public function overDueInvoiceCount(User $user): int
    {
        $userId = null;
        if (!$user->hasPermissionTo('view orders')) {
            $userId = $user->id;
        }

        return $this->orderRepository->overDueInvoiceCount($userId);
    }

    public function overPerMonthCount(User $user): int
    {
        $userId = null;
        if (!$user->hasPermissionTo('view orders')) {
            $userId = $user->id;
        }

        return $this->orderRepository->overPerMonthCount($userId);
    }

    public function completedMonthCount(User $user): int
    {
        $userId = null;
        if (!$user->hasPermissionTo('view orders')) {
            $userId = $user->id;
        }

        return $this->orderRepository->completedMonthCount($userId);
    }

    public function inProgressCount(User $user): int
    {
        $userId = null;
        if (!$user->hasPermissionTo('view orders')) {
            $userId = $user->id;
        }

        return $this->orderRepository->inProgressCount($userId);
    }

    public function pendingInvoiceCount(User $user): int
    {
        $userId = null;
        if (!$user->hasPermissionTo('view orders')) {
            $userId = $user->id;
        }

        return $this->orderRepository->pendingInvoiceCount($userId);
    }

    public function recentOrders(User $user): Collection
    {
        $userId = null;
        if (!$user->hasPermissionTo('view orders')) {
            $userId = $user->id;
        }

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
