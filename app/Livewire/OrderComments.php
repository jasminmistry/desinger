<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\Order;
use App\Services\CommentService;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class OrderComments extends Component
{
    public string $orderId = '';

    #[Validate('required')]
    public string $comment = '';

    private $commentService;


    public function boot(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }

    #[On("comment-created")]
    public function render()
    {
        $comments = Comment::where('order_id', (int) $this->orderId)->get();
        return view('livewire.order-comments', ['orderId' => $this->orderId, 'comments' => $comments]);
    }

    public function save()
    {
        $order = Order::find($this->orderId);
        if (!(auth()->user()->can('can edit comment') || (auth()->user()->can('can edit own comment') && $order->user_id = auth()->user()->id))) {
            abort(403);
        }

        $this->validate();

        $this->commentService->create((int) $this->orderId, auth()->user()->id, $this->comment);
        $this->reset('comment');
        $this->dispatch('comment-created');
    }
}
