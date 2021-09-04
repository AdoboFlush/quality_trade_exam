<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        Product::create(['name' => 'Espresso', 'price' => '100.00', 'description' => 'It is a hot Coffee']);
        Product::create(['name' => 'Iced Americano', 'price' => '120.50', 'description' => 'It is a cold Coffee']);
        Product::create(['name' => 'Mocha Milktea', 'price' => '200.25', 'description' => 'It is not a Coffee.']);
    }
}
