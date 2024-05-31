<?php

namespace App\Http\Controllers;

use App\Enums\OrderType;
use App\Enums\Priority;
use App\Http\Requests\StoreDigitizingRequest;
use App\Http\Requests\UpdateDigitizingRequest;
use App\Models\Digitizing;
use App\Models\Order;
use App\Models\OrderDocument;
use App\Services\DigitizingService;
use App\Services\OrderDocumentService;
use App\Services\OrderService;
use Illuminate\Routing\Controllers\Middleware;
use Spatie\Permission\Middleware\PermissionMiddleware;

class DigitizingController extends Controller
{
    public function __construct(private OrderService $orderService, private DigitizingService $digitizingService, private OrderDocumentService $orderDocumentService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $digitizing = Digitizing::with('user');
        if ($user->hasPermissionTo('view orders')) {
        } else if ($user->hasPermissionTo('view own orders')) {
            $digitizing->where('user_id', $user->id);
        }

        return view('digitizing.list', [
            'digitizing' => $digitizing->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('digitizing.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDigitizingRequest $request)
    {
        $request->validated();
        $orderId = $this->orderService->create(OrderType::DIGITIZING->value, $request->get('priority', Priority::NORMAL->value));

        $this->digitizingService->create($request, $orderId);

        $this->orderDocumentService->uploadDocuments($request->file('picture'), $orderId);

        return redirect(route('order.index'))->with('status', __("Order created successfully."));
    }

    /**
     * Display the specified resource.
     */
    public function show(Digitizing $degitizing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Digitizing $digitizing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDigitizingRequest $request, Digitizing $digitizing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Digitizing $digitizing)
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
