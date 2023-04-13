<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Model 
use App\Models\Food;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foods = [
            [
                'name' => 'Pizza',
                'description' => 'Pizza buona',
                'price' => '18.00',
                'vegetarian' => '0',
                'vegan' => '0',
                'img' => 'https://www.example.com/ristorante-mario.jpg',
            ],
            [
                'name' => 'Pasta',
                'description' => 'Pasta al sugo',
                'price' => '10.00',
                'vegetarian' => '0',
                'vegan' => '0',
                'img' => 'https://www.example.com/trattoria-del-sole.jpg',
            ],
            [
                'name' => 'Bistecca',
                'description' => 'Al sangue',
                'price' => '15.04',
                'vegetarian' => '0',
                'vegan' => '0',
                'img' => 'https://www.example.com/ristorantino.jpg',
            ],
        ];
        foreach ($foods as $food) {

            Food::create([
                'name' => $food['name'],
                'description' => $food['description'],
                'price' => $food['price'],
                'vegetarian' => $food['vegetarian'],
                'vegan' => $food['vegan'],
                'img' => $food['img'],
            ]);
        }
    }
}
