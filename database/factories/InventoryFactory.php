<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Vendor;
use App\Models\Location;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['Laptop', 'Smartphone', 'Tablet']),
            'brand' => fake()->randomElement(['Apple', 'Samsung', 'Xiaomi']),
            'type' => fake()->randomElement(['Barang Elektronik', 'Barang Pecah Belah', 'Barang Mudah Pecah']),
            'quantity' => fake()->numberBetween(1, 100),
            'procurement_year' => fake()->year(),
            'vendor_id' => Vendor::factory(),
            'location_id' => Location::factory(),
            'contract_number' => fake()->randomNumber(8, true),
            'description' => fake()->sentence(),
        ];
    }
}
