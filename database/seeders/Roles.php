<?php

namespace Database\Seeders;

use App\Enums\RolesEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Roles extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => RolesEnum::SUPER_ADMIN->value]);
        Role::create(['name' => RolesEnum::ADMIN->value]);
        Role::create(['name' => RolesEnum::QA_MANAGER->value]);
        Role::create(['name' => RolesEnum::DESIGNER->value]);
        // $role->givePermissionTo(Permission::all());
    }
}
