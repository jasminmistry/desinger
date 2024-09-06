<?php

namespace App\Http\Controllers;

use App\Services\OrderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct(private OrderService $orderService) {}

    public function index()
    {
        $user = Auth()->user();
        return view('dashboard', [
            'today_order_count' => $this->orderService->todayOrderCount($user),
            'over_due_invoice_count' => $this->orderService->overDueInvoiceCount($user),
            'per_month_count' => $this->orderService->overPerMonthCount($user),
            'complete_month_count' => $this->orderService->completedMonthCount($user),
            'in_progress_count' => $this->orderService->inProgressCount($user),
            'pending_invoice_count' => $this->orderService->pendingInvoiceCount($user),
            'recent_orders' => $this->orderService->recentOrders($user),
        ]);
    }
}
