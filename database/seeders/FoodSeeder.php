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
                'name' => 'Spaghetti alla carbonara',
                'description' => 'Spaghetti, pancetta, pecorino romano, uova, pepe',
                'price' => 12.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'img' => 'https://www.lacucinaimperfetta.com/wp-content/uploads/2018/01/Spaghetti-alla-carbonara.jpg'
            ],
            [
                'restaurant_id' => '5',
                'name' => 'Burrito di carne',
                'description' => 'Farina, Strutto, Lievito, Macinato di manzo, Fagioli, Peperoni, Pomodoro, Cipolle, Aglio, Pepe, Cumino',
                'price' => 12.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'img' => 'https://wips.plug.it/cips/paginegialle.it/magazine/cms/2018/07/mexican-2456038_1280.jpg?w=744&h=418&a=c'
            ],
            [
                'restaurant_id' => '5',
                'name' => 'Tacosa di carne',
                'description' => 'Farina, Strutto, Lievito, Macinato di manzo, Pomodor, Cipolle, Pepe, Cumino',
                'price' => 10.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'img' => 'https://www.giallozafferano.it/images/174-17495/Tacos-con-carne_450x300.jpg'
            ],
            [
                'restaurant_id' => '3',
                'name' => 'Pizza Margherita',
                'description' => 'Farina, acqua, lievito, sale, pomodoro, mozzarella, basilico',
                'price' => 10.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'img' => 'https://cdn.shopify.com/s/files/1/0586/6795/8427/articles/Margherita-9920.jpg?crop=center&height=915&v=1644590028&width=1200'
            ],
            [
                'restaurant_id' => '3',
                'name' => 'Pizza tonno e cipolla',
                'description' => 'Farina, acqua, lievito, sale, pomodoro, mozzarella, basilico, tonno, cipolla',
                'price' => 13.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'img' => 'https://media-assets.lacucinaitaliana.it/photos/61fbd8df3697f3ffd0cffbc5/3:2/w_1200,h_800,c_limit/pizza-tonno-cipolle-800.jpg'
            ],
            [
                'restaurant_id' => '5',
                'name' => 'Paella',
                'description' => 'Riso, pollo, gamberi, vongole, pomodoro, piselli, zafferano',
                'price' => 16.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'img' => 'https://www.misya.info/wp-content/uploads/2009/07/paella-mista.jpg'
            ],
            [
                'restaurant_id' => '1',
                'name' => 'Risotto alla milanese',
                'description' => 'Riso, zafferano, brodo di carne, cipolla, burro, parmigiano',
                'price' => 13.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'img' => 'https://media-assets.lacucinaitaliana.it/photos/61fbdba12c2fe9743efe8a2a/3:2/w_449,h_300,c_limit/empty'
            ],
            [
                'restaurant_id' => '1',
                'name' => 'Curry di verdure',
                'description' => 'Verdure miste, latte di cocco, curry, peperoncino, anacardi',
                'price' => 14.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'img' => 'https://blog.giallozafferano.it/lericettedisimo/wp-content/uploads/2021/01/Curry-di-verdure-ricetta.jpg'
            ],
            [
                'restaurant_id' => '4',
                'name' => 'Tartare di salmone',
                'description' => 'Salmone, limone, olio extravergine d\'oliva, cipolla rossa, capperi',
                'price' => 18.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'img' => 'https://media-assets.lacucinaitaliana.it/photos/620fbf8ca4d64e19087d8bc7/3:2/w_1500,h_1000,c_limit/Tartara-di-salmone-avocado-e-mango.jpg'
            ],
            [
                'restaurant_id' => '4',
                'name' => 'Sushi misto',
                'description' => '35pz di sushi misto con sqalmone, tonno, gamberi, uova di pesce, riso, alga, salsa di soia, avocado',
                'price' => 24.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'img' => 'https://sea-breeze.it/wp-content/uploads/2019/10/barca-di-sushi.png'
            ],
            [
                'restaurant_id' => '1',
                'name' => 'Pasta alla Norma',
                'description' => 'Spaghetti, pomodoro, melanzane, basilico, ricotta salata',
                'price' => 11.99,
                'vegetarian' => 1,
                'vegan' => 0,
                'img' => 'https://media-assets.lacucinaitaliana.it/photos/61fb0349a9db3736d06bb7b6/16:9/w_1600,h_900,c_limit/empty'
            ],
            [
                'restaurant_id' => '4',
                'name' => 'Fish and chips',
                'description' => 'Merluzzo, patatine, farina, birra, uova, sale, pepe',
                'price' => 15.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'img' => 'https://www.buttalapasta.it/wp-content/uploads/2009/11/fish-chips.jpg'
            ],
            [
                'restaurant_id' => '1',
                'name' => 'Pad Thai',
                'description' => 'Tagliatelle di riso, gamberi, uova, arachidi, fagioli germogliati, salsa di soia',
                'price' => 14.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'img' => 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/7DE647CE-2E09-4CBE-88EE-CFFCC70D7440/Derivates/F8CA1C89-596A-4EC0-9A63-6505DDBD528C.jpg'
            ],
            [
                'restaurant_id' => '5',
                'name' => 'Goulash',
                'description' => 'Manzo, paprika, peperoni, cipolla, pomodori, patate',
                'price' => 17.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'img' => 'https://www.thespruceeats.com/thmb/c6CKNqmHjtBFpWGPlo3o9btkFK0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/easy-hungarian-goulash-recipe-1805923-hero-01-0dd1f354032a41dd82b6e807b0161e6b.jpg'
            ],
            [
                'restaurant_id' => '3',
                'name' => 'Tiramisù',
                'description' => 'Savoiardi, mascarpone, caffè',
                'price' => 6.00,
                'vegetarian' => 1,
                'vegan' => 0,
                'img' => 'https://www.giallozafferano.it/images/237-23742/Tiramisu_450x300.jpg'
            ],
            [
                'restaurant_id' => '2',
                'name' => 'Lasagne con ragù di salsiccia',
                'description' => 'Lasagne, ragù di salsiccia, besciamella',
                'price' => 14.00,
                'vegetarian' => 0,
                'vegan' => 0,
                'img' => 'https://www.giallozafferano.it/images/221-22100/Lasagne-con-ragu-di-salsiccia_450x300.jpg'
            ],
            [
                'restaurant_id' => '2',
                'name' => 'Insalata Caprese',
                'description' => 'Pomodoro, mozzarella di bufala, basilico',
                'price' => 9.00,
                'vegetarian' => 1,
                'vegan' => 0,
                'img' => 'https://primochef.it/wp-content/uploads/2021/05/SH_caprese_classica.jpg.webp'
            ],
            [
                'restaurant_id' => '2',
                'name' => 'Veggie Burger',
                'description' => 'Pane integrale, burger di soia, pomodoro, lattuga',
                'price' => '12.00',
                'vegetarian' => 1,
                'vegan' => 1,
                'img' => 'https://wips.plug.it/cips/buonissimo.org/cms/2019/03/hamburger-quinoa.jpg'
            ],
            [
                'restaurant_id' => '3',
                'name' => 'Pasta alla Norma',
                'description' => 'Pasta, melanzane, pomodori, basilico, ricotta salata',
                'price' => 9.50,
                'vegetarian' => 1,
                'vegan' => 0,
                'img' => 'https://media-assets.lacucinaitaliana.it/photos/61fb0349a9db3736d06bb7b6/16:9/w_1600,h_900,c_limit/empty'
            ],
            [
                'restaurant_id' => '2',
                'name' => 'Pollo al curry',
                'description' => 'Pollo, curry, latte di cocco, peperoni, cipolle',
                'price' => 12.00,
                'vegetarian' => 0,
                'vegan' => 0,
                'img' => 'https://www.fattoincasadabenedetta.it/wp-content/uploads/2022/02/sito-.-32-Pollo-al-curry_intro.jpg',
            ],
            [
                'restaurant_id' => '4',
                'name' => 'Salmone alla griglia',
                'description' => 'Salmone, spinaci, patate, limone',
                'price' => 15.00,
                'vegetarian' => 0,
                'vegan' => 0,
                'img' => 'https://wips.plug.it/cips/buonissimo.org/cms/2020/07/salmone-griglia.jpg',
            ],
            [
                'restaurant_id' => '2',
                'name' => 'Insalata di quinoa',
                'description' => 'Quinoa, avocado, pomodorini, mais, feta',
                'price' => 9.00,
                'vegetarian' => 1,
                'vegan' => 0,
                'img' => 'https://wips.plug.it/cips/buonissimo.org/cms/2016/01/insalata-di-quinoa-olive-e-ceci.jpg?w=712&a=c&h=406',
            ],
            [
                'restaurant_id' => '3',
                'name' => 'Ravioli di zucca',
                'description' => 'Pasta fresca all\'uovo ripiena di zucca, parmigiano e amaretti',
                'price' => 12.50,
                'vegetarian' => 1,
                'vegan' => 0,
                'img' => 'https://www.giallozafferano.it/images/239-23953/Tortelli-di-zucca_450x300.jpg'
            ],
            [
                'restaurant_id' => '2',
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