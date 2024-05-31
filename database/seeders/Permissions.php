<?php

namespace Database\Seeders;

use App\Enums\RolesEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Permissions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'edit user permission']);
        Permission::create(['name' => 'delete users']);

        Permission::create(['name' => 'create orders']);
        Permission::create(['name' => 'view orders']);
        Permission::create(['name' => 'view own orders']);
        Permission::create(['name' => 'edit orders']);
        Permission::create(['name' => 'edit own orders']);
        Permission::create(['name' => 'delete orders']);
        Permission::create(['name' => 'change order statuses']);

        $guest = Role::findByName(RolesEnum::GUEST->value);
        $guest->givePermissionTo(['create orders', 'view own orders']);

        $role = Role::findByName(RolesEnum::SUPER_ADMIN->value);
        $role->givePermissionTo(Permission::all());
    }
}
