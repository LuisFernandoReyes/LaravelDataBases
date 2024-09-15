<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name'=> 'Example',
            'short_description' => 'Lorem Impsum',
            'description'=> 'first product',
            'price' => 100
        ]);
        Product::create([
            'name'=> 'Example 2',
            'short_description' => 'Lorem Impsum 2',
            'description'=> 'second product',
            'price' => 25
        ]);
        Product::create([
            'name'=> 'Example 3',
            'short_description' => 'Lorem Impsum 3',
            'description'=> 'third product',
            'price' => 75
        ]);
        Product::create([
            'name'=> 'Example 4',
            'short_description' => 'Lorem Impsum 4',
            'description'=> 'fourth product',
            'price' => 150
        ]);
    }
}
