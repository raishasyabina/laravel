<?php

namespace Tests\Feature;

use App\Models\Package;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BoothRentalTest extends TestCase
{
    use RefreshDatabase;

    public function test_catalog_page_shows_available_packages(): void
    {
        Package::create([
            'name' => 'Starter Booth',
            'slug' => 'starter-booth',
            'description' => 'Paket startup',
            'category' => 'booth',
            'price_per_day' => 650000,
            'total_stock' => 8,
            'photo' => 'https://example.com/booth.jpg',
        ]);

        $response = $this->get('/catalog');

        $response->assertStatus(200);
        $response->assertSee('Starter Booth');
        $response->assertSee('Paket startup');
    }

    public function test_customer_can_create_a_reservation(): void
    {
        $customer = User::factory()->create([
            'name' => 'Customer Test',
            'email' => 'customer@example.com',
            'role' => 'customer',
        ]);

        $package = Package::create([
            'name' => 'Premium Booth',
            'slug' => 'premium-booth',
            'description' => 'Paket premium',
            'category' => 'booth',
            'price_per_day' => 1250000,
            'total_stock' => 10,
            'photo' => 'https://example.com/premium.jpg',
        ]);

        $response = $this->actingAs($customer)->post('/reservations', [
            'package_id' => $package->id,
            'start_date' => '2026-07-10',
            'end_date' => '2026-07-12',
            'delivery_address' => 'Jl. Sudirman No. 1',
            'notes' => 'Butuh area depan',
            'quantity' => 1,
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('reservations', [
            'customer_id' => $customer->id,
            'status' => 'pending',
        ]);
    }
}
