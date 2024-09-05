<?php

namespace App\Repositories;

use App\Models\Comment;

class CommentRepository
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function create(int $orderId, int $userId, string $comment) : bool
    {
        $comm = new Comment();
        $comm->order_id = $orderId;
        $comm->user_id = $userId;
        $comm->comment = $comment;

        return $comm->save();
    }
}
