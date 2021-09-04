<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Product::truncate();
        Product::create(['name' => 'Espresso', 'price' => '100.00', 'description' => 'It is a hot Coffee']);
        Product::create(['name' => 'Iced Americano', 'price' => '120.50', 'description' => 'It is a cold Coffee']);
        Product::create(['name' => 'Mocha Milktea', 'price' => '200.25', 'description' => 'It is not a Coffee.']);
    }
}
