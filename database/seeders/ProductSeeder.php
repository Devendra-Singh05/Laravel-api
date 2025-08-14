<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data=[[
                'name' => 'Smartphone',
                'discount' => 500,
                'quantity'=>1000,
                'price' => 15000,
                'categories_id' => 1, 
                'image' => 'https://images.indianexpress.com/2017/02/nokia3310main22.jpg?w=414'
            ],
            [
                
                'name' => 'Laptop',
                'discount' => 2000,
                'quantity'=>1000,
                'price' => 55000,
                'categories_id' => 1,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWS7Tv8fTb-X8Q60Xnd1z-L-MjK296UjdwzA&s'
            ],
            [
                
                
                'name' => 'T-Shirt',
                'discount' => 50,
                'quantity'=>1000,
                'price' => 500,
                'categories_id' => 2, 
                'image' => 'https://i.pinimg.com/236x/b7/e0/77/b7e077310657b96cc8c8f7505517ee99.jpg'
            ],
            [ 
                'name' => 'Jeans',
                'discount' => 200,
                'quantity'=>1000,
                'price' => 1200,
                'categories_id' => 2,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMQODcaju2P3FMXvpCYaUdueE_Wfv_oTwf7w&s'
            ],
            [
               
                'name' => 'Microwave Oven',
                'discount' => 500,
                'quantity'=>1000,
                'price' => 8000,
                'categories_id' => 3, 
                'image' => 'https://m.media-amazon.com/images/I/717bf+smjmL._UF350,350_QL80_.jpg'
            ],
            [
                
                'name' => 'Cooking Pan Set',
                'discount' => 100,
                'quantity'=>1000,
                'price' => 2000,
                'categories_id' => 3,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcToYwyuqD5Kvm7Uc7ku7beBIX1HdiiTyfJd-A&s'
            ],
            [
                
                'name' => 'Novel - The Alchemist',
                'discount' => 50,
                'quantity'=>1000,
                'price' => 350,
                'categories_id' => 4, 
                'image' => 'https://rukminim2.flixcart.com/image/704/844/xif0q/book/j/f/q/-original-imagnhh9gsj5hkkt.jpeg?q=90&crop=false'
            ],
            [
                'name' => 'Science Textbook',
                'discount' => 80,
                'quantity'=>1000,
                'price' => 500,
                'categories_id' => 4,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTs7M-JzwNK5toAiCmmCErMqvsFj_Oo_1iAGA&s'
            ]];
            foreach($data as $info){
            Product::create($info);
            }
    }
}