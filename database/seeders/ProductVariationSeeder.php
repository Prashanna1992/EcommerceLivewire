<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ProductVariationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        $data = [
            [
                'product_id' => 1,
                'variation_type' => 'Color, Storage and GPU',
                'variation_name' => 'Grey | 16 GB RAM | 512 GB PCIE NVME M.2 | RTX 3060',
                'price' => 1899.99,
                'discount_price' => 1799.99,
            ],
            [
                'product_id' => 1,
                'variation_type' => 'Color and Storage',
                'variation_name' => 'Grey | 32 GB RAM | 1 TB PCIE NVME M.2 | RTX 3070',
                'price' => 2499.99,
                'discount_price' => 2399.99,
            ],
            [
                'product_id' => 1,
                'variation_type' => 'Color and Storage',
                'variation_name' => 'Stringray White | 32 GB RAM | 1 TB PCIE NVME M.2 | RTX 3070',
                'price' => 2599.99,
                'discount_price' => 2499.99,
            ],


            [
                'product_id' => 2,
                'variation_type' => 'Color and Storage',
                'variation_name' => 'Black | 16 GB RAM | 512 GB PCIE NVME M.2 | RTX 3050Ti',
                'price' => 1899.99,
                'discount_price' => 1799.99,
            ],
            [
                'product_id' => 1,
                'variation_type' => 'Color and Storage',
                'variation_name' => 'Grey | 32 GB RAM | 1 TB PCIE NVME M.2 | RTX 3060',
                'price' => 2499.99,
                'discount_price' => 2399.99,
            ],
            [
                'product_id' => 1,
                'variation_type' => 'Color and Storage',
                'variation_name' => 'Stringray White | 32 GB RAM | 1 TB PCIE NVME M.2 | RTX 3070',
                'price' => 2599.99,
                'discount_price' => 2499.99,
            ],
        ];

        DB::table('product_variations')->truncate();

        DB::table('product_variations')->insert($data);
        Schema::enableForeignKeyConstraints();
    }
}
