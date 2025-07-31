<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $fd= Factory::create();
       for($i=1;$i<=20;$i++){
        Product::create([
            'name'=>$fd->word,
            'price'=>$fd->numberBetween(100,500),
            'discount'=>$fd->numberBetween(5,50),
            'quantity'=>1000,
        ]);
       }
    }
}