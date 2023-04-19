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
                'restaurant_id' => '1',
                "name" => "Spaghetti alla carbonara",
                "description" => "Spaghetti, pancetta, pecorino romano, uova, pepe",
                "price" => 12.99,
                "vegetarian" => "0",
                "vegan" => "0",
                "img" => "https://www.giallozafferano.it/images/251-2513/Spaghetti-alla-carbonara_780x520_wm.jpg",
            ],
            [
                'restaurant_id' => '1',
                'name' => 'Pizza Margherita',
                'description' => 'Farina, acqua, lievito, sale, pomodoro, mozzarella, basilico',
                'price' => 10.99,
                'vegetarian' => '1',
                'vegan' => '0',
                'img' => 'https://www.giallozafferano.it/images/201-2016/Image-w400-h400-cpad-80/2624_4c4d5113-2443-4c2d-8d50-d1adaa79fbb5.jpeg'
            ],
            [
                'restaurant_id' => '2',
                'name' => 'Paella',
                'description' => 'Riso, pollo, gamberi, vongole, pomodoro, piselli, zafferano',
                'price' => 16.99,
                'vegetarian' => '0',
                'vegan' => '0',
                'img' => 'https://www.giallozafferano.it/images/217-21731/Paella-della-Costa-Brava_780x520_wm.jpg'
            ],
            [
                'restaurant_id' => '2',
                'name' => 'Risotto alla milanese',
                'description' => 'Riso, zafferano, brodo di carne, cipolla, burro, parmigiano',
                'price' => 13.99,
                'vegetarian' => '1',
                'vegan' => '0',
                'img' => 'https://www.giallozafferano.it/images/169-16947/Risotto-alla-milanese_780x520_wm.jpg'
            ],
            [
                'restaurant_id' => '3',
                'name' => 'Curry di verdure',
                'description' => 'Verdure miste, latte di cocco, curry, peperoncino, anacardi',
                'price' => 14.99,
                'vegetarian' => '1',
                'vegan' => '1',
                'img' => 'https://www.giallozafferano.it/images/236-23649/Curry-di-verdure-facile-e-veloce_780x520_wm.jpg'
            ],
            [
                'restaurant_id' => '3',
                'name' => 'Tartare di salmone',
                'description' => 'Salmone, limone, olio extravergine d\'oliva, cipolla rossa, capperi',
                'price' => 18.99,
                'vegetarian' => '0',
                'vegan' => '0',
                'img' => 'https://www.giallozafferano.it/images/216-21671/Filetti-di-salmone-crudi-all-olio-d-oliva-e-cetrioli_780x520_wm.jpg'
            ],
            [
                'restaurant_id' => '4',
                'name' => 'Pasta alla Norma',
                'description' => 'Spaghetti, pomodoro, melanzane, basilico, ricotta salata',
                'price' => 11.99,
                'vegetarian' => '1',
                'vegan' => '0',
                'img' => 'https://www.giallozafferano.it/images/272-27232/Pasta-alla-Norma_780x520_wm.jpg'
            ],
            [
                'restaurant_id' => '4',
                'name' => 'Fish and chips',
                'description' => 'Merluzzo, patatine, farina, birra, uova, sale, pepe',
                'price' => 15.99,
                'vegetarian' => '0',
                'vegan' => '0',
                'img' => 'https://www.giallozafferano.it/images/253-2530/Fish-Chips_780x520_wm.jpg'
            ],
            [
                'restaurant_id' => '5',
                'name' => 'Pad Thai',
                'description' => 'Tagliatelle di riso, gamberi, uova, arachidi, fagioli germogliati, salsa di soia',
                'price' => 14.99,
                'vegetarian' => '0',
                'vegan' => '0',
                'img' => 'https://www.giallozafferano.it/images/250-2500/Pad-Thai_780x520_wm.jpg'
            ],
            [
                'restaurant_id' => '5',
                'name' => 'Goulash',
                'description' => 'Manzo, paprika, peperoni, cipolla, pomodori, patate',
                'price' => 17.99,
                'vegetarian' => '0',
                'vegan' => '0',
                'img' => 'https://www.giallozafferano.it/images/173-17327/Goulash-ungherese_780x520_wm.jpg'
            ],
            [
                'restaurant_id' => '6',
                'name' => 'Tiramisù',
                'description' => 'Savoiardi, mascarpone, caffè',
                'price' => 6.00,
                'vegetarian' => 1,
                'vegan' => 0,
                'img' => 'https://www.giallozafferano.it/images/237-23742/Tiramisu_450x300.jpg'
            ],
            [
                'restaurant_id' => '6',
                'name' => 'Lasagne con ragù di salsiccia',
                'description' => 'Lasagne, ragù di salsiccia, besciamella',
                'price' => 14.00,
                'vegetarian' => 0,
                'vegan' => 0,
                'img' => 'https://www.giallozafferano.it/images/221-22100/Lasagne-con-ragu-di-salsiccia_450x300.jpg'
            ],
            [
                'restaurant_id' => '7',
                'name' => 'Insalata Caprese',
                'description' => 'Pomodoro, mozzarella di bufala, basilico',
                'price' => 9.00,
                'vegetarian' => 1,
                'vegan' => 0,
                'img' => 'https://primochef.it/wp-content/uploads/2021/05/SH_caprese_classica.jpg.webp'
            ],
            [
                'restaurant_id' => '7',
                'name' => 'Veggie Burger',
                'description' => 'Pane integrale, burger di soia, pomodoro, lattuga',
                'price' => '12.00',
                'vegetarian' => '1',
                'vegan' => '1',
                'img' => 'https://wips.plug.it/cips/buonissimo.org/cms/2019/03/hamburger-quinoa.jpg'
            ],
            [
                'restaurant_id' => '8',
                'name' => 'Pasta alla Norma',
                'description' => 'Pasta, melanzane, pomodori, basilico, ricotta salata',
                'price' => 9.50,
                'vegetarian' => 1,
                'vegan' => 0,
                'img' => 'https://www.giallozafferano.it/images/182-18296/Pasta-alla-Norma_1200x800.jpg',
            ],
            [
                'restaurant_id' => '8',
                'name' => 'Pollo al curry',
                'description' => 'Pollo, curry, latte di cocco, peperoni, cipolle',
                'price' => 12.00,
                'vegetarian' => 0,
                'vegan' => 0,
                'img' => 'https://www.giallozafferano.it/images/214-21466/Pollo-al-curry_1200x800.jpg',
            ],
            [
                'restaurant_id' => '9',
                'name' => 'Salmone alla griglia',
                'description' => 'Salmone, spinaci, patate, limone',
                'price' => 15.00,
                'vegetarian' => 0,
                'vegan' => 0,
                'img' => 'https://www.giallozafferano.it/images/236-2361/Salmone-alla-griglia_1200x800.jpg',
            ],
            [
                'restaurant_id' => '9',
                'name' => 'Insalata di quinoa',
                'description' => 'Quinoa, avocado, pomodorini, mais, feta',
                'price' => 9.00,
                'vegetarian' => 1,
                'vegan' => 0,
                'img' => 'https://www.giallozafferano.it/images/221-22138/Insalata-di-quinoa-con-avocado-e-pomodorini_1200x800.jpg',
            ],
            [
                'restaurant_id' => '10',
                'name' => 'Ravioli di zucca',
                'description' => 'Pasta fresca all\'uovo ripiena di zucca, parmigiano e amaretti',
                'price' => 12.50,
                'vegetarian' => 1,
                'vegan' => 0,
                'img' => 'https://www.giallozafferano.it/images/239-23953/Tortelli-di-zucca_450x300.jpg'
            ],
            [
                'restaurant_id' => '10',
                'name' => 'Carpaccio di barbabietole',
                'description' => 'Barbabietole a fette sottili, scaglie di formaggio di capra, rucola e noci',
                'price' => 9.90,
                'vegetarian' => 1,
                'vegan' => 1,
                'img' => 'https://blog.giallozafferano.it/ilchiccodimais/wp-content/uploads/2020/08/carpaccio-di-barbabietola-con-limone-grana-e-pinoli-ricetta-secondo-sano-leggero-vegetariano-il-chicco-di-mais.jpg'
            ],
        ];
        
        foreach ($foods as $food) {

            Food::create($food);
        }
    }
}