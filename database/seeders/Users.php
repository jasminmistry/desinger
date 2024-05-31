<?php

namespace Database\Seeders;

use App\Enums\RolesEnum;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'mistry.jasmin@gmail.com',
            'password' => bcrypt("p@ssw0rd")
        ]);

        $user->assignRole(RolesEnum::SUPER_ADMIN);
    }
}
