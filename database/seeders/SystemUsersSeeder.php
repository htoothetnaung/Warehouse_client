<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SystemUser;

class SystemUsersSeeder extends Seeder
{
    public function run()
    {
        SystemUser::create([
            'name' => 'Admin',
            'role' => 'admin',
            'email' => 'admin@example.com',
            'phone' => '1234567890',
        ]);
    }
}
