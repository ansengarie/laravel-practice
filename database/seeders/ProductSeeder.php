<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name' => 'Smartphone', 'description' => 'deskripsi 1','price' => 5000, 'category_id' => 1],
            ['name' => 'Novel', 'description' => 'deskripsi 2', 'price' => 75000, 'category_id' => 2],
            ['name' => 'T-shirt', 'description' => 'deskripsi 2', 'price' => 1000, 'category_id' => 3],
        ]);
    }
}
