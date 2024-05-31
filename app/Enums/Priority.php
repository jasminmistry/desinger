<?php
namespace App\Enums;

enum Priority: int
{
    case NORMAL = 0;
    case HIGH = 1;

    public function label(): string
    {
        return match ($this) {
            static::NORMAL => 'Normal',
            static::HIGH => 'High',
        };
    }
}
