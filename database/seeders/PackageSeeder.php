<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    public function run(): void
    {
        $packages = [
            [
                'name' => 'Starter Booth',
                'slug' => 'starter-booth',
                'description' => 'Paket hemat untuk UMKM dan pameran kecil.',
                'category' => 'booth',
                'price_per_day' => 650000,
                'total_stock' => 12,
                'photo' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=900&q=80',
            ],
            [
                'name' => 'Growth Booth',
                'slug' => 'growth-booth',
                'description' => 'Paket serbaguna dengan area display lebih luas.',
                'category' => 'booth',
                'price_per_day' => 950000,
                'total_stock' => 8,
                'photo' => 'https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&w=900&q=80',
            ],
            [
                'name' => 'Premium Booth',
                'slug' => 'premium-booth',
                'description' => 'Paket premium untuk brand activation dan launch event.',
                'category' => 'booth',
                'price_per_day' => 1250000,
                'total_stock' => 5,
                'photo' => 'https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=900&q=80',
            ],
        ];

        foreach ($packages as $package) {
            Package::firstOrCreate(['slug' => $package['slug']], $package);
        }
    }
}
