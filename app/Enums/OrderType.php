<?php
namespace App\Enums;

enum OrderType: int
{
    case DIGITIZING = 0;
    case VECTOR = 1;
    case PATCH = 2;
    case OTHER_SERVICE = 3;

    public function label(): string
    {
        return match ($this) {
            static::DIGITIZING => 'Digitizing',
            static::VECTOR => 'Vector',
            static::PATCH => 'Patch',
            static::OTHER_SERVICE => 'Other Services',
        };
    }
}
