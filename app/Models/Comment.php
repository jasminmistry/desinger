<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'user_id',
        'comment'
    ];

    public function user() : HasOne {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function order() : HasOne {
        return $this->hasOne(Order::class, 'id', 'order_id');
    }

}
