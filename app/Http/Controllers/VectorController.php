<?php

namespace App\Http\Controllers;

use App\Enums\OrderType;
use App\Enums\Priority;
use App\Http\Requests\StoreVectorRequest;
use App\Http\Requests\UpdateVectorRequest;
use App\Models\Vector;
use App\Services\OrderDocumentService;
use App\Services\OrderService;
use App\Services\VectorService;
use Illuminate\Routing\Controllers\Middleware;
use Spatie\Permission\Middleware\PermissionMiddleware;

class VectorController extends Controller
{
    public function __construct(private OrderService $orderService, private VectorService $vectorService, private OrderDocumentService $orderDocumentService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vector.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVectorRequest $request)
    {
        $request->validated();
        $orderId = $this->orderService->create(OrderType::VECTOR->value, $request->get('priority', Priority::NORMAL->value));

        $this->vectorService->create($request, $orderId);

        $this->orderDocumentService->uploadDocuments($request->file('picture'), $orderId);

        return redirect(route('order.index'))->with('status', __("Order created successfully."));
    }

    /**
     * Display the specified resource.
     */
    public function show(Vector $vector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vector $vector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVectorRequest $request, Vector $vector)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vector $vector)
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
