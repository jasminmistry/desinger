<?php

namespace Database\Seeders;

use App\Enums\RolesEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsUpdated extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Permission::create(['name' => 'can view comment']);
        Permission::create(['name' => 'can edit comment']);
        Permission::create(['name' => 'can edit own comment']);
        Permission::create(['name' => 'assign order']);

        $designer = Role::findByName(RolesEnum::DESIGNER->value);
        $designer->givePermissionTo(['create orders', 'view own orders', 'edit own orders', 'change order statuses', 'view own orders', 'can edit comment', 'can edit own comment']);


        $designer = Role::findByName(RolesEnum::CUSTOMER->value);
        $designer->givePermissionTo(['create orders', 'edit own orders', 'view own orders',  'can edit own comment']);

        $designer = Role::findByName(RolesEnum::QA_MANAGER->value);
        $designer->givePermissionTo(['create orders', 'view orders', 'edit orders', 'edit own orders', 'assign order', 'change order statuses', 'view own orders', 'can edit comment', 'can edit own comment']);

        $role = Role::findByName(RolesEnum::SUPER_ADMIN->value);
        $role->givePermissionTo(Permission::all());
    }
}
