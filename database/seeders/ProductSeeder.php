<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('products')->truncate();
        $data = [
            [
                'id' => Str::orderedUuid(),
                'name' => "Lenovo Legion 7",
                'description' => "Lenovo Legion 7 laptop with RTX 3070, and 16GB RAM, with 12th Gen 12700.",
                'price' => 1899.99,
                'discount_price' => 1799.99,
                'quantity' => 5,
            ],
            [
                'id' => Str::orderedUuid(),
                'name' => "Asus ROG Strix G15",
                'description' => "Asus ROG Strix G15 laptop with RTX 3080 16GB, and 16GB RAM, with 12th Gen 12900.",
                'price' => 2599.99,
                'discount_price' => 2499.99,
                'quantity' => 5,
            ],
            [
                'id' => Str::orderedUuid(),
                'name' => "Denim Jeans",
                'description' => "Awesome denim jeans for summer!",
                'price' => 79.99,
                'discount_price' => 75.99,
                'quantity' => 5,
            ],
            [
                'id' => Str::orderedUuid(),
                'name' => "Rothco MA-1 Flight Jacket Bomber Jacket Military Jacket",
                'description' => "Classic MA-1 Flight Jacket Features A Fully Reversible Rescue Orange Polyester Lining, Warm Poly Fiberfill Lining, And 100% Nylon Water Repellent Outer Shell",
                'price' => 83.99,
                'discount_price' => 79.99,
                'quantity' => 5,
            ],
            [
                'id' => Str::orderedUuid(),
                'name' => "GLORIA VANDERBILT Women's Classic Amanda High Rise",
                'description' => "Gloria Vanderbilt branded button and rivets. Classic 5 pocket design denim pant. Front YKK zip and button closure. Sits at natural waist.",
                'price' => 16.31,
                'discount_price' => 14.99,
                'quantity' => 5,
            ],
        ];
        DB::table('products')->insert($data);
        Schema::enableForeignKeyConstraints();
    }
}
