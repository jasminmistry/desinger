<?php

namespace App\Services;

use App\Http\Requests\StoreVectorRequest;
use App\Models\Vector;

class VectorService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function create(StoreVectorRequest $request, int $orderId): int
    {
        $vector = new Vector();
        $vector->fill($request->all());
        $vector->order_id = $orderId;
        $vector->save();

        return $vector->id;
    }
}
