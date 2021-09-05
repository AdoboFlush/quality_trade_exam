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
        Product::create(['name' => 'Mango Cheese Cake', 'price' => '120.25', 'description' => 'It is not a Coffee.']);
        Product::create(['name' => 'Americano', 'price' => '300.25', 'description' => 'It is a Coffee.']);
        Product::create(['name' => 'Cappuccino', 'price' => '200.00', 'description' => 'It is not a Coffee.']);
        Product::create(['name' => '12 Dozen Donuts', 'price' => '550.00', 'description' => 'It is not a Coffee.']);
        Product::create(['name' => 'Chocolate Cake', 'price' => '100.75', 'description' => 'It is not a Coffee.']);
        Product::create(['name' => 'Frappuccino', 'price' => '200.00', 'description' => 'It is not a Coffee.']);
        Product::create(['name' => 'Mocha', 'price' => '400.50', 'description' => 'It is not a Coffee.']);
        Product::create(['name' => 'Okinawa', 'price' => '130.50', 'description' => 'It is not a Coffee.']);
        Product::create(['name' => 'Espresso (large)', 'price' => '200.00', 'description' => 'It is a hot Coffee']);
        Product::create(['name' => 'Iced Americano (large)', 'price' => '220.50', 'description' => 'It is a cold Coffee']);
        Product::create(['name' => 'Mocha Milktea (large)', 'price' => '300.25', 'description' => 'It is not a Coffee.']);
        Product::create(['name' => 'Mango Cheese Cake (large)', 'price' => '220.25', 'description' => 'It is not a Coffee.']);
        Product::create(['name' => 'Americano (large)', 'price' => '400.25', 'description' => 'It is a Coffee.']);
        Product::create(['name' => 'Cappuccino (large)', 'price' => '300.00', 'description' => 'It is not a Coffee.']);
        Product::create(['name' => '12 Dozen Donuts (large)', 'price' => '650.00', 'description' => 'It is not a Coffee.']);
        Product::create(['name' => 'Chocolate Cake (large)', 'price' => '200.75', 'description' => 'It is not a Coffee.']);
        Product::create(['name' => 'Frappuccino (large)', 'price' => '300.00', 'description' => 'It is not a Coffee.']);
        Product::create(['name' => 'Mocha (large)', 'price' => '500.50', 'description' => 'It is not a Coffee.']);
        Product::create(['name' => 'Okinawa (large)', 'price' => '230.50', 'description' => 'It is not a Coffee.']);
        Product::create(['name' => 'White Chocolate Mocha', 'price' => '200.00', 'description' => 'It is a hot Coffee']);
        Product::create(['name' => 'Oreo Cheese Cake', 'price' => '220.50', 'description' => 'It is a cold Coffee']);
        Product::create(['name' => 'Avocado Cheese Cake', 'price' => '300.25', 'description' => 'It is not a Coffee.']);
        Product::create(['name' => 'Vanilla', 'price' => '220.25', 'description' => 'It is not a Coffee.']);
        Product::create(['name' => 'Classic Pearl', 'price' => '400.25', 'description' => 'It is a Coffee.']);
        Product::create(['name' => 'Wintermelon', 'price' => '300.00', 'description' => 'It is not a Coffee.']);
        Product::create(['name' => 'Matcha', 'price' => '650.00', 'description' => 'It is not a Coffee.']);
        Product::create(['name' => 'Chocolate Dipped Donut', 'price' => '200.75', 'description' => 'It is not a Coffee.']);
        Product::create(['name' => 'Blue Berry Cheesecake', 'price' => '300.00', 'description' => 'It is not a Coffee.']);
        Product::create(['name' => 'Cinnamon Roll', 'price' => '500.50', 'description' => 'It is not a Coffee.']);
        Product::create(['name' => 'Chocolate Chip Cookies', 'price' => '230.50', 'description' => 'It is not a Coffee.']);

    }
}
