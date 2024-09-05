<?php

namespace App\Services;

use App\Models\Comment;
use App\Repositories\CommentRepository;

class CommentService
{
    /**
     * Create a new class instance.
     */
    public function __construct(private CommentRepository $commentRepository)
    {
        //
    }

    public function create(int $orderId, int $userId, string $comment) : bool
    {
        return $this->commentRepository->create($orderId, $userId, $comment);
    }
}
