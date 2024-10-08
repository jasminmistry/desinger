<?php

namespace App\Http\Controllers;

use App\Enums\OrderType;
use App\Enums\Priority;
use App\Enums\RolesEnum;
use App\Http\Requests\StoreOtherServiceRequest;
use App\Http\Requests\UpdateOtherServiceRequest;
use App\Models\Order;
use App\Models\OtherService;
use App\Services\OrderDocumentService;
use App\Services\OrderService;
use App\Services\OtherService as ServicesOtherService;
use Illuminate\Http\Client\Request;
use Illuminate\Routing\Controllers\Middleware;
use Spatie\Permission\Middleware\PermissionMiddleware;

class OtherServiceController extends Controller
{
    public function __construct(private OrderService $orderService, private ServicesOtherService $otherService, private OrderDocumentService $orderDocumentService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = auth()->user();
        $orders = Order::with(['user'])->where('order_type', OrderType::PATCH->value);
        if ($user->hasPermissionTo('view orders')) {
        } else if ($user->hasPermissionTo('view own orders')) {
            $orders->where('user_id', $user->id);
        }
        $orders->orderBy('created_at', 'asc');
        $view = $request->get('view', 'kanban');

        return view('order.list', [
            'orders' => $orders->paginate(10),
            'view' => $view
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('otherservice.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOtherServiceRequest $request)
    {
        $request->validated();
        $orderId = $this->orderService->create(OrderType::OTHER_SERVICE->value, $request->get('priority', Priority::NORMAL->value));

        $this->otherService->create($request, $orderId);

        $this->orderDocumentService->uploadDocuments($request->file('picture'), $orderId);
        $user = auth()->user();

        if ($user->hasRole(RolesEnum::GUEST)) {
            return redirect(route('dashboard'))->with('status', __("Order created successfully."));
        }

        return redirect(route('order.index'))->with('status', __("Order created successfully."));
    }

    /**
     * Display the specified resource.
     */
    public function show(OtherService $otherService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OtherService $otherService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOtherServiceRequest $request, OtherService $otherService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OtherService $otherService)
    {
        //
    }

    public static function middleware(): array
    {
        return [
            new Middleware(PermissionMiddleware::using('create orders'), only: ['create', 'store']),
            new Middleware(PermissionMiddleware::using('view orders|view own orders'), only: ['list']),
            new Middleware(PermissionMiddleware::using('edit orders|edit own orders'), only: ['edit', 'update']),
            new Middleware(PermissionMiddleware::using('delete orders'), only: ['destroy']),
        ];
    }
}
