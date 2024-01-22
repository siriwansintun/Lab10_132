<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'product_name' => 'Iphone 15 pro',
                'product_type' => 1,
                'price' => 42900,
            ],
            [
                'product_name' => 'Galaxy S23',
                'product_type' => 1,
                'price' => 37900,
            ],
            [
                'product_name' => 'LG Smart TV',
                'product_type' => 2,
                'price' => 28900,
            ],
            [
                'product_name' => 'Samsung Smart TV',
                'product_type' => 2,
                'price' => 29900,
            ],

            ]);
    }
}
