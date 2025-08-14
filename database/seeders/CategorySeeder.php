<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // fake data
    //  $fd = Factory::create();
    //  for($i = 0; $i < 10; $i++){
    //     Category::create([
    //         'name' => $fd->word(),
    //         'description' => $fd->sentence(),
    //     ]);
    //  }


    $data= [['name' => 'Electronics', 'description' => 'Latest gadgets and devices'],
            ['name' => 'Clothing', 'description' => 'Men and Women fashion wear'],
            ['name' => 'Home Appliances', 'description' => 'Home and kitchen essentials'],
            ['name' => 'Books', 'description' => 'Educational and fiction books']];
            foreach($data as $info){
                Category::create($info);
            }
    }
}