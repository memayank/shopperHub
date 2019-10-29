<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=>'Nike sports shoes',
            'price'=>10,
            'description'=> 'Should buy',
            'slug'=>'item1'
        ]);

        Product::create([
            'name' => 'Adidas sports shoes',
            'price' => 15,
            'description' => 'Should buy',
            'slug' => 'item2'
        ]);

        Product::create([
            'name' => 'Samsung smart watch',
            'price' => 12,
            'description' => 'Should buy',
            'slug' => 'item3'
        ]);

        Product::create([
            'name' => 'Apple watch 3',
            'price' => 8,
            'description' => 'Should buy',
            'slug' => 'item4'
        ]);

        Product::create([
            'name' => 'Fossil smartwatch',
            'price' => 20,
            'description' => 'Should buy',
            'slug' => 'item5'
        ]);
    }
}
