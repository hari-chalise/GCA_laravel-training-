<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Product::truncate();
        // Category::truncate();
        // \App\Models\User::factory(10)->create();
      $category =  \App\Models\Category::create([
            'category_name' => 'Accessories',
            'category_desc' => 'This is the Associaries of the Laptop in the Desktop',
        ]);
        Product::factory(8)->create([
            'category_id' => 4
        ]);
    }
} 
