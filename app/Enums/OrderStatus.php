<?php
namespace App\Enums;

enum OrderStatus: int
{
    case PENDING = 0;
    case IN_PROGRESS = 1;
    case OVER_DUE = 2;
    case COMPLETED = 3;

    public function label(): string
    {
        return match ($this) {
            static::PENDING => 'Pending',
            static::IN_PROGRESS => 'In Progress',
            static::OVER_DUE => 'Over Due',
            static::COMPLETED => 'Completed',
        };
    }
}
