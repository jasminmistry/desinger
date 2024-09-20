<?php

namespace Database\Seeders;

use App\Enums\RolesEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DesignerPermission extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        $designer = Role::findByName(RolesEnum::DESIGNER->value);
        $designer->givePermissionTo(['create orders', 'view own orders', 'edit own orders', 'change order statuses', 'view orders', 'can edit comment', 'can edit own comment']);

    }
}
