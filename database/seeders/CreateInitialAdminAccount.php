<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateInitialAdminAccount extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::unguard();

        User::create([
            'email' => 'admin.account@lmao.com',
            'password' => bcrypt('123456'),
            'first_name' => 'Admin',
            'last_name' => 'Test',
            'is_active' => true,
            'username' => 'admin',
            'is_admin' => true,
        ]);
    }
}
