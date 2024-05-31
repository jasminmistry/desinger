<?php

namespace App\Services;

use App\Http\Requests\StorePatchRequest;
use App\Models\Patch;

class PatchService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function create(StorePatchRequest $request, int $orderId): int
    {
        $patch = new Patch();
        $patch->fill($request->all());
        $patch->order_id = $orderId;
        $patch->save();

        return $patch->id;
    }
}
