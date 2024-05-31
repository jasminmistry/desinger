<?php

namespace App\Repositories;

use App\Models\OrderDocument;

class OrderDocumentRepository
{
    public function create(string $name, string $path, string $type, int $orderId) {
        $orderDocument = new OrderDocument();
        $orderDocument->file_path = $name;
        $orderDocument->file_name = $path;
        $orderDocument->file_type = $type;
        $orderDocument->order_id = $orderId;
        $orderDocument->save();
    }
}
