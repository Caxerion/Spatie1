<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Sample Product 1',
            'description' => 'This is a sample product description for testing purposes.'
        ]);

        Product::create([
            'name' => 'Sample Product 2',
            'description' => 'Another sample product to demonstrate the application.'
        ]);

        Product::create([
            'name' => 'Sample Product 3',
            'description' => 'Yet another product in the list.'
        ]);
    }
}
