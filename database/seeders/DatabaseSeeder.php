<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin Booth',
            'email' => 'admin@eventboothrent.com',
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Customer Booth',
            'email' => 'customer@eventboothrent.com',
            'role' => 'customer',
        ]);

        $this->call(PackageSeeder::class);
    }
}
