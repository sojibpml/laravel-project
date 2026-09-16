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
        $products = [];

        for ($i = 1; $i <= 100; $i++) {
            $products[] = [
                'name' => 'Product ' . $i,
                'price' => $i * 100,
                'stock' => $i * 5,
                'category_id' => (($i - 1) % 10) + 1,
            ];
        }

        DB::table('products')->insert($products);
    }
}
