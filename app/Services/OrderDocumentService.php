<?php

namespace App\Services;

use App\Repositories\OrderDocumentRepository;
use Illuminate\Support\Facades\Storage;

class OrderDocumentService
{
    /**
     * Create a new class instance.
     */
    public function __construct(private OrderDocumentRepository $orderDocumentRepository)
    {
        //
    }

    public function uploadDocuments(array $files, int $orderId)
    {
        foreach ($files as $file) {
            $name = $file->hashName();
            Storage::disk('public')->put("digitizing", $file);
            $this->orderDocumentRepository->create($name, $file->getClientOriginalName(), $file->getClientOriginalExtension(), $orderId);
        }
    }
}
