<?php

namespace App\Services;

use App\Http\Requests\StoreDigitizingRequest;
use App\Models\Digitizing;

class DigitizingService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function create(StoreDigitizingRequest $request, int $orderId)
    {
        $digitizing = new Digitizing();
        $digitizing->fill($request->all());
        $digitizing->order_id = $orderId;
        $digitizing->save();
    }
}
