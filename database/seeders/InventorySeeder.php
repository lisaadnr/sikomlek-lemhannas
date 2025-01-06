<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;
use App\Models\Location;
use App\Models\Inventory;

class InventorySeeder extends Seeder
{

    public function run(): void
    {
        // Buat 3 locations dummy
        Location::factory()->count(3)->create();
        // Buat 5 lokasi dummy
        Vendor::factory()->count(5)->create();
        // Buat 10 inventories dummy
        Inventory::factory()->count(10)->create();
    }
}

