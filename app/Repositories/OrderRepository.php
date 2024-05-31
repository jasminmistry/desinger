<?php

namespace App\Repositories;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class OrderRepository
{
    public function todayOrderCount(int $userId): int
    {
        return Order::where('user_id', $userId)->whereDay('created_at', now()->day)->count();
    }

    public function overDueInvoiceCount(int $userId): int
    {
        return Order::where('user_id', $userId)->where('status', \App\Enums\OrderStatus::OVER_DUE)->count();
    }

    public function overPerMonthCount(int $userId): int
    {
        return Order::where('user_id', $userId)->whereMonth('created_at', now()->month)->count();
    }

    public function completedMonthCount(int $userId): int
    {
        return Order::where('user_id', $userId)->where('status', \App\Enums\OrderStatus::COMPLETED)->whereMonth('created_at', now()->month)->count();
    }

    public function inProgressCount(int $userId): int
    {
        return Order::where('user_id', $userId)->where('status', \App\Enums\OrderStatus::IN_PROGRESS)->count();
    }

    public function pendingInvoiceCount(int $userId): int
    {
        return Order::where('user_id', $userId)->where('status', \App\Enums\OrderStatus::PENDING)->count();
    }

    public function recentOrders(int $userId): Collection
    {
        $orderBuilder = Order::with(['documents']);
        $user = User::find($userId);
        if ($user->hasPermissionTo('view orders')) {
        } else if ($user->hasPermissionTo('view own orders')) {
            $orderBuilder->where('user_id', $user->id);
        }
        return $orderBuilder->orderBy('id', 'desc')->limit(4)->get();
    }
}
