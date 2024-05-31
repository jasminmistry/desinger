<?php
namespace App\Enums;

enum RolesEnum: string
{
    case SUPER_ADMIN = 'super-admin';
    case ADMIN = 'admin';
    case QA_MANAGER = 'qa-manager';
    case DESIGNER = 'designer';
    case CUSTOMER = 'customer';
    case GUEST = 'guest';

    public function label(): string
    {
        return match ($this) {
            static::SUPER_ADMIN => 'Super Admin',
            static::ADMIN => 'Admin',
            static::QA_MANAGER => 'Qa Manager',
            static::DESIGNER => 'Designer',
            static::CUSTOMER => 'customer',
            static::GUEST => 'Guest',
        };
    }
}
