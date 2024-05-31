<?php

namespace App\Services;

use App\Http\Requests\StoreOtherServiceRequest;
use App\Models\OtherService as ModelsOtherService;

class OtherService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function create(StoreOtherServiceRequest $request, int $orderId): int
    {
        $otherService = new ModelsOtherService();
        $otherService->fill($request->all());
        $otherService->order_id = $orderId;
        $otherService->save();

        return $otherService->id;
    }
}
