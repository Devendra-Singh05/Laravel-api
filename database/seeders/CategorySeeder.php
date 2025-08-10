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
        //
     $fd = Factory::create();
     for($i = 0; $i < 10; $i++){
        Category::create([
            'name' => $fd->word(),
            'description' => $fd->sentence(),
        ]);
     }
    }
}