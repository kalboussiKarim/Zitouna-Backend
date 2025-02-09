<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@olive.com',
            'password' => Hash::make('admin123'),
            'role' => User::ROLE_ADMIN
        ]);

        User::factory()->worker()->create([
            'name' => 'Worker 1',
            'email' => 'worker1@olive.com'
        ]);

        User::factory()->worker()->create([
            'name' => 'Worker 2',
            'email' => 'worker2@olive.com'
        ]);

        User::factory(3)->create();
    }
}
