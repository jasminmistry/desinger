<?php

namespace App\Repositories;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class OrderRepository
{
    public function todayOrderCount(?int $userId): int
    {
        $queryBuilder = Order::whereDay('created_at', now()->day);
        if ($userId) {
            $queryBuilder->where('user_id', $userId);
        }
        return $queryBuilder->count();
    }

    public function overDueInvoiceCount(?int $userId): int
    {
        $queryBuilder = Order::where('status', \App\Enums\OrderStatus::OVER_DUE);
        if ($userId) {
            $queryBuilder->where('user_id', $userId);
        }
        return $queryBuilder->count();

    }

    public function overPerMonthCount(?int $userId): int
    {
        $queryBuilder = Order::whereMonth('created_at', now()->month);
        if ($userId) {
            $queryBuilder->where('user_id', $userId);
        }
        return $queryBuilder->count();
    }

    public function completedMonthCount(?int $userId): int
    {
        $queryBuilder = Order::where('status', \App\Enums\OrderStatus::COMPLETED)->whereMonth('created_at', now()->month);
        if ($userId) {
            $queryBuilder->where('user_id', $userId);
        }
        return $queryBuilder->count();
    }

    public function inProgressCount(?int $userId): int
    {
        $queryBuilder = Order::where('status', \App\Enums\OrderStatus::IN_PROGRESS);
        if ($userId) {
            $queryBuilder->where('user_id', $userId);
        }
        return $queryBuilder->count();

    }

    public function pendingInvoiceCount(?int $userId): int
    {
        $queryBuilder = Order::where('status', \App\Enums\OrderStatus::PENDING);
        if ($userId) {
            $queryBuilder->where('user_id', $userId);
        }
        return $queryBuilder->count();
    }

    public function recentOrders(?int $userId): Collection
    {
        $queryBuilder = Order::with(['documents']);
        if ($userId) {
            $queryBuilder->where('user_id', $userId);
        }
        return $queryBuilder->orderBy('id', 'desc')->limit(4)->get();
    }
}
