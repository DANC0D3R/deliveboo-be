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
            // 1 | TRATTORIA - RISTORANTE DA MARIO
            [
                'restaurant_id' => '1',
                "name" => "Spaghetti alla carbonara",
                "description" => "Spaghetti, uova, guanciale, pepe, pecorino romano",
                "price" => 8.50,
                "vegetarian" => 0,
                "vegan" => 0,
                "glutenfree" => 0,
                "img" => "https://www.askanews.it/wp-content/uploads/2018/11/spaghetti-alla-carbonara-640x478.jpg"
            ],
            [
                'restaurant_id' => '1',
                'name' => 'Risotto alla milanese',
                'description' => 'Riso, zafferano, brodo di carne, cipolla, burro, parmigiano',
                'price' => 13.99,
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 0,
                'img' => 'https://media-assets.lacucinaitaliana.it/photos/61fbdba12c2fe9743efe8a2a/3:2/w_449,h_300,c_limit/empty'
            ],
            [
                'restaurant_id' => '1',
                'name' => 'Lasagne con ragù di salsiccia',
                'description' => 'Lasagne, ragù di salsiccia, besciamella',
                'price' => 14.00,
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 0,
                'img' => 'https://www.giallozafferano.it/images/221-22100/Lasagne-con-ragu-di-salsiccia_450x300.jpg'
            ],
            [
                'restaurant_id' => '1',
                'name' => 'Pad Thai',
                'description' => 'Tagliatelle di riso, gamberi, uova, arachidi, fagioli germogliati, salsa di soia',
                'price' => 14.99,
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 0,
                'img' => 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/7DE647CE-2E09-4CBE-88EE-CFFCC70D7440/Derivates/F8CA1C89-596A-4EC0-9A63-6505DDBD528C.jpg'
            ],
            [
                'restaurant_id' => '1',
                "name" => "Gnocchi alla sorrentina",
                "description" => "Gnocchi di patate, pomodoro, mozzarella, basilico",
                "price" => 8.50,
                "vegetarian" => 1,
                "vegan" => 0,
                "glutenfree" => 0,
                "img" => "https://www.ricettasprint.it/wp-content/uploads/2019/04/Gnocchi-alla-sorrentina.jpg"
            ],
            [
                'restaurant_id' => '1',
                "name" => "Arancini di riso al ragù",
                "description" => "Riso, carne di manzo, piselli, formaggio, uova",
                "price" => 2.50,
                "vegetarian" => 0,
                "vegan" => 0,
                "glutenfree" => 0,
                "img" => "https://www.pasticceriainternazionale.com/wp-content/uploads/2018/07/99RISTVD_ARANCINI_VILLETTI_GIUSEPPE_02.jpg"
            ],
            [
                'restaurant_id' => '1',
                "name" => "Tagliatelle ai funghi porcini",
                "description" => "Tagliatelle, funghi porcini, panna, Parmigiano Reggiano",
                "price" => 10.50,
                "vegetarian" => 1,
                "vegan" => 0,
                "glutenfree" => 0,
                "img" => "https://www.cucinain.it/wp-content/uploads/2020/11/Tagliatelle-ai-funghi-porcini.png"
            ],
            [
                'restaurant_id' => '1',
                'name' => 'Insalata Caprese',
                'description' => 'Pomodoro, mozzarella di bufala, basilico',
                'price' => 9.00,
                'vegetarian' => 1,
                'vegan' => 0,
                "glutenfree" => 1,
                'img' => 'https://primochef.it/wp-content/uploads/2021/05/SH_caprese_classica.jpg.webp'
            ],
            [
                'restaurant_id' => '1',
                'name' => 'Ravioli di zucca',
                'description' => 'Pasta fresca all\'uovo ripiena di zucca, parmigiano e amaretti',
                'price' => 12.50,
                'vegetarian' => 1,
                'vegan' => 0,
                "glutenfree" => 0,
                'img' => 'https://www.giallozafferano.it/images/239-23953/Tortelli-di-zucca_450x300.jpg'
            ],
            [
                'restaurant_id' => '1',
                "name" => "Risotto ai funghi",
                "description" => "Riso carnaroli, funghi porcini, parmigiano reggiano",
                "price" => 18,
                "vegetarian" => 1,
                "vegan" => 0,
                "glutenfree" => 1,
                "img" => "https://www.giallozafferano.it/images/ricette/201/20104/foto_hd/hd750x421_wm.jpg"
            ],


            // 2 | RISTORANTE - IL RISTORANTINO
            [
                'restaurant_id' => '2',
                'name' => 'Tartare di salmone',
                'description' => 'Salmone, limone, olio extravergine d\'oliva, cipolla rossa, capperi',
                'price' => 18.99,
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 1,
                'img' => 'https://media-assets.lacucinaitaliana.it/photos/620fbf8ca4d64e19087d8bc7/3:2/w_1500,h_1000,c_limit/Tartara-di-salmone-avocado-e-mango.jpg'
            ],
            [
                'restaurant_id' => '2',
                "name" => "Tagliolini al tartufo",
                "description" => "Tagliolini freschi, crema di tartufo, parmigiano reggiano",
                "price" => 24,
                "vegetarian" => 1,
                "vegan" => 0,
                "glutenfree" => 0,
                "img" => "https://dueruoteatavola.it/wp-content/uploads/2020/04/Tagliolini-al-tartufo-nero-di-Norcia-e-lo-sfizio-di-vinotti.jpg"
            ],
            [
                'restaurant_id' => '2',
                'name' => 'Curry di verdure',
                'description' => 'Verdure miste, latte di cocco, curry, peperoncino, anacardi',
                'price' => 14.99,
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 0,
                'img' => 'https://blog.giallozafferano.it/lericettedisimo/wp-content/uploads/2021/01/Curry-di-verdure-ricetta.jpg'
            ],
            [
                'restaurant_id' => '2',
                "name" => "Carpaccio di manzo",
                "description" => "Fesa di manzo cruda, rucola, parmigiano reggiano, aceto balsamico",
                "price" => 20,
                "vegetarian" => 0,
                "vegan" => 0,
                "glutenfree" => 1,
                "img" => "https://www.giallozafferano.it/images/186-1863/Carpaccio-di-Manzo-aggiornata_690x460.jpg"
            ],
            [
                'restaurant_id' => '2',
                'name' => 'Insalata di quinoa',
                'description' => 'Quinoa, avocado, pomodorini, mais, feta',
                'price' => 9.00,
                'vegetarian' => 1,
                'vegan' => 0,
                "glutenfree" => 1,
                'img' => 'https://wips.plug.it/cips/buonissimo.org/cms/2016/01/insalata-di-quinoa-olive-e-ceci.jpg?w=712&a=c&h=406',
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
                'restaurant_id' => '2',
                "name" => "Spaghetti alle vongole",
                "description" => "Spaghetti di grano duro, vongole, prezzemolo, aglio",
                "price" => 20,
                "vegetarian" => 0,
                "vegan" => 0,
                "glutenfree" => 0,
                "img" => "https://www.giallozafferano.it/images/ricette/85/8548/foto_hd/hd750x421_wm.jpg"
            ],
            [
                'restaurant_id' => '2',
                "name" => "Polpo alla griglia",
                "description" => "Polpo fresco, patate novelle, olive taggiasche, pomodorini",
                "price" => 26,
                "vegetarian" => 0,
                "vegan" => 0,
                "glutenfree" => 1,
                "img" => "https://www.giallozafferano.it/images/ricette/64/6423/foto_hd/hd750x421_wm.jpg"
            ],
            [
                'restaurant_id' => '2',
                "name" => "Filetto di branzino",
                "description" => "Branzino fresco, sale grosso, limone, prezzemolo",
                "price" => 24,
                "vegetarian" => 0,
                "vegan" => 0,
                "glutenfree" => 1,
                "img" => "https://www.giallozafferano.it/images/ricette/139/13963/foto_hd/hd750x421_wm.jpg"
            ],
            [
                'restaurant_id' => '2',
                'name' => 'Carpaccio di barbabietole',
                'description' => 'Barbabietole a fette sottili, scaglie di formaggio di capra, rucola e noci',
                'price' => 9.90,
                'vegetarian' => 1,
                'vegan' => 1,
                "glutenfree" => 1,
                'img' => 'https://blog.giallozafferano.it/ilchiccodimais/wp-content/uploads/2020/08/carpaccio-di-barbabietola-con-limone-grana-e-pinoli-ricetta-secondo-sano-leggero-vegetariano-il-chicco-di-mais.jpg'
            ],


            // 3 | PIZZERIA - LA PIZZERIA DEL CORSO
            [
                'restaurant_id' => '3',
                'name' => 'Margherita',
                'description' => 'pomodoro, mozzarella, basilico',
                'price' => '5.50',
                'vegetarian' => 1,
                'vegan' => 0,
                "glutenfree" => 1,
                'img' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2019/03/pizza-margherita/jcr:content/header-par/image-single.img10.jpg/1553057913437.jpg'
            ],
            [
                'restaurant_id' => '3',
                'name' => 'Capricciosa',
                'description' => 'pomodoro, mozzarella, funghi, prosciutto, olive',
                'price' => '8.00',
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 1,
                'img' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2018/04/pizza-capricciosa/jcr:content/header-par/image-single.img10.jpg/1522911194266.jpg'
            ],
            [
                'restaurant_id' => '3',
                'name' => 'Vegetariana',
                'description' => 'pomodoro, mozzarella, melanzane, zucchine, peperoni, cipolle',
                'price' => '7.50',
                'vegetarian' => 1,
                'vegan' => 0,
                "glutenfree" => 1,
                'img' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2020/06/pizza-vegetariana/jcr:content/header-par/image-single.img10.jpg/1593705439785.jpg'
            ],
            [
                'restaurant_id' => '3',
                'name' => 'Diavola',
                'description' => 'pomodoro, mozzarella, salame piccante',
                'price' => '7.00',
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 1,
                'img' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2018/05/pizza-diavola/jcr:content/header-par/image-single.img10.jpg/1525996097949.jpg'
            ],
            [
                'restaurant_id' => '3',
                'name' => 'Ripieno Fritto',
                'description' => 'mozzarella, pomodoro, ricotta, salame',
                'price' => '7.50',
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 1,
                'img' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2019/03/pizza-napoli/jcr:content/header-par/image-single.img10.jpg/1553058017537.jpg'
            ],
            [
                'restaurant_id' => '3',
                'name' => 'Prosciutto e Funghi',
                'description' => 'pomodoro, mozzarella, prosciutto, funghi',
                'price' => '7.50',
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 1,
                'img' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2018/09/pizza-prosciutto-e-funghi/jcr:content/header-par/image-single.img10.jpg/1537486390342.jpg'
            ],
            [
                'restaurant_id' => '3',
                'name' => 'Quattro Formaggi',
                'description' => 'pomodoro, mozzarella, gorgonzola, fontina, parmigiano',
                'price' => '8.00',
                'vegetarian' => 1,
                'vegan' => 0,
                "glutenfree" => 1,
                'img' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2019/10/pizza-4-formaggi/jcr:content/header-par/image-single.img10.jpg/1570040487214.jpg'
            ],
            [
                'restaurant_id' => '3',
                'name' => 'Salsiccia e Friarielli',
                'description' => 'pomodoro, mozzarella, salsiccia, friarielli, peperoncino',
                'price' => '8.50',
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 1,
                'img' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2019/02/pizza-salsiccia-e-friarielli/jcr:content/header-par/image-single.img10.jpg/1550679561219.jpg'
            ],
            [
                'restaurant_id' => '3',
                'name' => 'Tonno e Cipolle',
                'description' => 'pomodoro, mozzarella, tonno, cipolle, olive',
                'price' => '7.50',
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 1,
                'img' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2019/10/pizza-tonno-e-cipolla/jcr:content/header-par/image-single.img10.jpg/1570040439312.jpg'
            ],
            [
                'restaurant_id' => '3',
                'name' => 'Americana',
                'description' => 'pomodoro, mozzarella, patatine fritte',
                'price' => '6.50',
                'vegetarian' => 1,
                'vegan' => 0,
                "glutenfree" => 1,
                'img' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2021/04/pizza-con-patatine-fritte/jcr:content/header-par/image-single.img10.jpg/1617321655016.jpg'
            ],


            // 4 | RISTORANTE GIAPPONESE - IL SAMURAI
            [
                'restaurant_id' => '4',
                'name' => 'Sushi misto',
                'description' => '35pz di sushi misto con sqalmone, tonno, gamberi, uova di pesce, riso, alghe nori, salsa di soia, avocado',
                'price' => 24.99,
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 1,
                'img' => 'https://sea-breeze.it/wp-content/uploads/2019/10/barca-di-sushi.png'
            ],
            [
                'restaurant_id' => '4',
                'name' => 'Tempura',
                'description' => 'gamberi, verdure, farina, uova',
                'price' => 12,
                'vegetarian' => 1,
                'vegan' => 0,
                "glutenfree" => 0,
                'img' => 'https://www.sbs.com.au/food/sites/sbs.com.au.food/files/styles/full/public/Japanese-tempura-500x333_0.jpg?itok=CvRkDJWz&mtime=1439971916'
            ],
            [
                'restaurant_id' => '4',
                'name' => 'Tonkatsu',
                'description' => 'maiale, pangrattato, uova',
                'price' => 13,
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 0,
                'img' => 'https://media-cdn.tripadvisor.com/media/photo-s/0d/9b/02/56/tonkatsu.jpg'
            ],
            [
                'restaurant_id' => '4',
                'name' => 'Ramen',
                'description' => 'pasta, carne di maiale, uova, cipolla',
                'price' => 10,
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 0,
                'img' => 'https://www.seriousseats.com/assets/ramen/ramen-totto-midtown.jpg'
            ],
            [
                'restaurant_id' => '4',
                'name' => 'Udon',
                'description' => 'pasta, dashi, soia, pollo',
                'price' => 11,
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 0,
                'img' => 'https://www.deliciousmagazine.co.uk/wp-content/uploads/2017/07/UDON.jpg'
            ],
            [
                'restaurant_id' => '4',
                'name' => 'Gyoza',
                'description' => 'pasta, maiale, cavolo, cipolla',
                'price' => 9,
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 0,
                'img' => 'https://t.bstatic.com/restaurant-review/3_5/asset/static_image/item/inline_item/gyoza-2143502828.jpg'
            ],
            [
                'restaurant_id' => '4',
                'name' => 'Yakisoba',
                'description' => 'pasta, verdure, carne di maiale, salsa di soia',
                'price' => 13,
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 0,
                'img' => 'https://i.pinimg.com/originals/e8/62/08/e86208dab22fa996d5a8f3b9713ac9d9.jpg'
            ],
            [
                'restaurant_id' => '4',
                'name' => 'Unagi',
                'description' => 'anguilla, riso, salsa teriyaki',
                'price' => 16,
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 1,
                'img' => 'https://i.ytimg.com/vi/H8Anuk2k-oc/maxresdefault.jpg'
            ],
            [
                'restaurant_id' => '4',
                'name' => 'Soba',
                'description' => 'pasta, dashi, soia, wasabi',
                'price' => 10,
                'vegetarian' => 1,
                'vegan' => 1,
                "glutenfree" => 0,
                'img' => 'https://i.pinimg.com/originals/22/88/1d/22881d10842151f7ab928f6ba99e6a96.jpg'
            ],
            [
                'restaurant_id' => '4',
                'name' => 'Okonomiyaki',
                'description' => 'uova, cavolo, pancetta, salsa tonkatsu',
                'price' => 12,
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 1,
                'img' => 'https://cookiesandthecity.files.wordpress.com/2016/06/okonomiyaki_02.jpg?w=438&h=329'
            ],


            // 5 | RISTORANTE MESSICANO - LA HACIENDA
            [
                'restaurant_id' => '5',
                'name' => 'Tacosa di carne',
                'description' => 'Farina, Strutto, Lievito, Macinato di manzo, Pomodor, Cipolle, Pepe, Cumino',
                'price' => 10.99,
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 0,
                'img' => 'https://www.giallozafferano.it/images/174-17495/Tacos-con-carne_450x300.jpg'
            ],
            [
                'restaurant_id' => '5',
                "name" => "Enchiladas verdes",
                "description" => "Pollo, salsa verde, formaggio, panna acida",
                "price" => 8.00,
                "vegetarian" => 0,
                "vegan" => 0,
                "glutenfree" => 1,
                "img" => "https://www.myfoodandfamily.com/sites/default/files/styles/625x469/public/image_legacy/ENL-3809_1.jpg?itok=18KAEv0Y"
            ],
            [
                'restaurant_id' => '5',
                'name' => 'Burrito di carne',
                'description' => 'Farina, Strutto, Lievito, Macinato di manzo, Fagioli, Peperoni, Pomodoro, Cipolle, Aglio, Pepe, Cumino',
                'price' => 12.99,
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 0,
                'img' => 'https://wips.plug.it/cips/paginegialle.it/magazine/cms/2018/07/mexican-2456038_1280.jpg?w=744&h=418&a=c'
            ],
            [
                'restaurant_id' => '5',
                "name" => "Tostadas de pollo",
                "description" => "Pollo, fagioli neri, guacamole, formaggio, lattuga",
                "price" => 4.00,
                "vegetarian" => 0,
                "vegan" => 0,
                "glutenfree" => 1,
                "img" => "https://www.seriouseats.com/thmb/0xTCyfR01j_wP_ZJz09fo5UK5q0=/1500x1125/smart/filters:no_upscale()/20200407-tostadas-de-pollo-vicky-wasik27-377452c1efb040159282f2e60213557e.jpg"
            ],
            [
                'restaurant_id' => '5',
                "name" => "Chiles rellenos",
                "description" => "Peperoni piccanti, carne macinata, formaggio, pomodoro",
                "price" => 7.50,
                "vegetarian" => 0,
                "vegan" => 0,
                "glutenfree" => 1,
                "img" => "https://www.simplyrecipes.com/thmb/BZmoeGFtz_Ev7VW61T8xZNiV1F4=/1800x1200/filters:fill(auto,1)/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2010__05__chile-rellenos-horiz-a-1800-8d260ee7b84a43b9ac26b50d2ff2c7fc.jpg"
            ],
            [
                'restaurant_id' => '5',
                "name" => "Quesadillas con carne",
                "description" => "Carne di manzo, fagioli neri, peperoni, formaggio",
                "price" => 5.00,
                "vegetarian" => 0,
                "vegan" => 0,
                "glutenfree" => 1,
                "img" => "https://www.inspiredtaste.net/wp-content/uploads/2019/07/Cheese-Quesadilla-Recipe-2-1200.jpg"
            ],
            [
                'restaurant_id' => '5',
                "name" => "Nachos con pico de gallo",
                "description" => "Chips di mais, pomodoro fresco, cipolla, jalapeno, formaggio fuso",
                "price" => 4.50,
                "vegetarian" => 1,
                "vegan" => 1,
                "glutenfree" => 1,
                "img" => "https://www.hogarmania.com/archivos/201705/cabi0012-enrique-nachos-con-pico-de-gallo-xl-1280x720x80xX.jpg"
            ],
            [
                'restaurant_id' => '5',
                "name" => "Tamale de pollo",
                "description" => "Pollo, mais, jalapeno, cipolla, formaggio, salsa di pomodoro",
                "price" => 6.00,
                "vegetarian" => 0,
                "vegan" => 0,
                "glutenfree" => 1,
                "img" => "https://www.foodnetwork.com/content/dam/images/food/video/0/00/000/0000/0001/6646/6646_s3x4.jpg"
            ],
            [
                'restaurant_id' => '5',
                "name" => "Sopa de tortilla",
                "description" => "Brodo di pollo, pomodoro, peperoni, avocado, tortilla croccanti",
                "price" => 4.50,
                "vegetarian" => 0,
                "vegan" => 1,
                "glutenfree" => 0,
                "img" => "https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/1CE741E9-B6B1-4607-AA4D-48DF65ADD44B/Derivates/6b0f4587-1bbe-4c49-ba5a-9b824d8b346b.jpg"
            ],
            [
                'restaurant_id' => '5',
                "name" => "Chimichanga",
                "description" => "Pollo, fagioli, peperoni, pomodoro, formaggio",
                "price" => 7.50,
                "vegetarian" => 0,
                "vegan" => 0,
                "glutenfree" => 1,
                "img" => "https://www.cookingclassy.com/wp-content/uploads/2019/04/chicken-chimichanga-10.jpg"
            ]
        ];
        
        foreach ($foods as $food) {

            Food::create($food);
        }
    }
}