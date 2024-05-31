<?php

namespace App\Models;

use App\Enums\OrderType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    public function service(): HasOne
    {
        switch ($this->order_type) {
            case OrderType::DIGITIZING->value:
                return $this->hasOne(Digitizing::class, 'order_id', 'id');
            case OrderType::PATCH->value:
                return $this->hasOne(Patch::class, 'order_id', 'id');
            case OrderType::VECTOR->value:
                return $this->hasOne(Vector::class, 'order_id', 'id');
            default:
                return $this->hasOne(OtherService::class, 'order_id', 'id');
        }
    }

    public function documents(): HasMany
    {
        return $this->hasMany(OrderDocument::class);
    }

    public function user() : HasOne {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function assigned() : HasOne {
        return $this->hasOne(User::class, 'id', 'assigned');
    }
}
