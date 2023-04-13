<?php

namespace Database\Seeders;

// Model 
use App\Models\Food;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $foods = [
            [
            "name" => "Spaghetti alla carbonara",
            "description" => "Spaghetti, pancetta, pecorino romano, uova, pepe",
            "price" => 12.99,
            "vegetarian" => "0",
            "vegan" => "0",
            "img" => "https://www.giallozafferano.it/images/251-2513/Spaghetti-alla-carbonara_780x520_wm.jpg"
            ],
            [
            "name" => "Pizza Margherita",
            "description" => "Farina, acqua, lievito, sale, pomodoro, mozzarella, basilico",
            "price" => 10.99,
            "vegetarian" => "1",
            "vegan" => "0",
            "img" => "https://www.giallozafferano.it/images/201-2016/Image-w400-h400-cpad-80/2624_4c4d5113-2443-4c2d-8d50-d1adaa79fbb5.jpeg"
            ],
            [
            "name" => "Paella",
            "description" => "Riso, pollo, gamberi, vongole, pomodoro, piselli, zafferano",
            "price" => 16.99,
            "vegetarian" => "0",
            "vegan" => "0",
            "img" => "https://www.giallozafferano.it/images/217-21731/Paella-della-Costa-Brava_780x520_wm.jpg"
            ],
            [
            "name" => "Risotto alla milanese",
            "description" => "Riso, zafferano, brodo di carne, cipolla, burro, parmigiano",
            "price" => 13.99,
            "vegetarian" => "1",
            "vegan" => "0",
            "img" => "https://www.giallozafferano.it/images/169-16947/Risotto-alla-milanese_780x520_wm.jpg"
            ],
            [
            "name" => "Curry di verdure",
            "description" => "Verdure miste, latte di cocco, curry, peperoncino, anacardi",
            "price" => 14.99,
            "vegetarian" => "1",
            "vegan" => "1",
            "img" => "https://www.giallozafferano.it/images/236-23649/Curry-di-verdure-facile-e-veloce_780x520_wm.jpg"
            ],
            [
            "name" => "Tartare di salmone",
            "description" => "Salmone, limone, olio extravergine d'oliva, cipolla rossa, capperi",
            "price" => 18.99,
            "vegetarian" => "0",
            "vegan" => "0",
            "img" => "https://www.giallozafferano.it/images/216-21671/Filetti-di-salmone-crudi-all-olio-d-oliva-e-cetrioli_780x520_wm.jpg"
            ],
            [
            "name" => "Pasta alla Norma",
            "description" => "Spaghetti, pomodoro, melanzane, basilico, ricotta salata",
            "price" => 11.99,
            "vegetarian" => "1",
            "vegan" => "0",
            "img" => "https://www.giallozafferano.it/images/272-27232/Pasta-alla-Norma_780x520_wm.jpg"
            ],
            [
            "name" => "Fish and chips",
            "description" => "Merluzzo, patatine, farina, birra, uova, sale, pepe",
            "price" => 15.99,
            "vegetarian" => "0",
            "vegan" => "0",
            "img" => "https://www.giallozafferano.it/images/253-2530/Fish-Chips_780x520_wm.jpg"
            ],
            [
            "name" => "Pad Thai",
            "description" => "Tagliatelle di riso, gamberi, uova, arachidi, fagioli germogliati, salsa di soia",
            "price" => 14.99,
            "vegetarian" => "0",
            "vegan" => "0",
            "img" => "https://www.giallozafferano.it/images/250-2500/Pad-Thai_780x520_wm.jpg"
            ],
            [
            "name" => "Goulash",
            "description" => "Manzo, paprika, peperoni, cipolla, pomodori, patate",
            "price" => 17.99,
            "vegetarian" => "0",
            "vegan" => "0",
            "img" => "https://www.giallozafferano.it/images/173-17327/Goulash-ungherese_780x520_wm.jpg"
            ]
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