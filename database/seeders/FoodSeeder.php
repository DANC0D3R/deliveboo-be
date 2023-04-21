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
            ],


            // 6 | RISTORANTE THAILANDESE - LE DU
            [
                'restaurant_id' => '6',
                'name' => 'Pad Thai',
                'description' => 'Riso di soia, uova, gamberetti, arachidi, cipolla',
                'price' => '9.99',
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/7DE647CE-2E09-4CBE-88EE-CFFCC70D7440/Derivates/F8CA1C89-596A-4EC0-9A63-6505DDBD528C.jpg'
            ],
            [
                'restaurant_id' => '6',
                'name' => 'Tom Yum Goong',
                'description' => 'Gamberetti, funghi, erba cipollina, tamarindo, peperoncino',
                'price' => '11.99',
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://hot-thai-kitchen.com/wp-content/uploads/2013/03/tom-yum-goong-blog.jpg'
            ],
            [
                'restaurant_id' => '6',
                'name' => 'Massaman Curry',
                'description' => 'Pollo, patate, cipolla, latte di cocco, curry in polvere',
                'price' => '13.99',
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://www.wellplated.com/wp-content/uploads/2022/08/best-massaman-curry-recipe.jpg'
            ],
            [
                'restaurant_id' => '6',
                'name' => 'Som Tam',
                'description' => 'Papaya verde, gamberetti secchi, noci di macadamia, pomodori ciliegini, peperoncino',
                'price' => '8.99',
                'vegetarian' => 1,
                'vegan' => 1,
                'glutenfree' => 1,
                'img' => 'https://www.seriouseats.com/thmb/yKNZ9ICJC5ZNhzcYHdHENxogpFw=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/20210928-Som-Tam-Thai-green-papaya-salad-vicky-wasik-24-f0d666fc609f49a0b9f34897bd2c6303.jpg'
            ],
            [
                'restaurant_id' => '6',
                'name' => 'Khao Soi',
                'description' => 'Pollo, latte di cocco, curcuma, noodles di farina di riso',
                'price' => '12.99',
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://www.seriouseats.com/thmb/5JLA8LFACf__s-k522KVYDw4qD0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/khao-soi-gai-northern-thai-coconut-curry-noodle-soup-recipe-laksa-hero-whitebowl-58fb7baced8f4949a995dc61d2dc3e3b.JPG'
            ],
            [
                'restaurant_id' => '6',
                'name' => 'Gaeng Daeng',
                'description' => 'Manzo, peperoncino rosso, basilico, zucchine, curry rosso',
                'price' => '14.99',
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://wfg32p.s3.amazonaws.com/media/dishes/gaeng_daeng_1161-reg.jpg'
            ],
            [
                'restaurant_id' => '6',
                'name' => 'Pad Kra Pao',
                'description' => 'Maiale, peperoncino, basilico, aglio, salsa di soia',
                'price' => '10.99',
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://images.kitchenstories.io/wagtailOriginalImages/R2592-final-photo.jpg'
            ],
            [
                'restaurant_id' => '6',
                'name' => 'Larb Gai',
                'description' => 'Pollo, lime, coriandolo, cipolle di primavera, peperoncino',
                'price' => '9.99',
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://thaicaliente.com/wp-content/uploads/2019/07/Laab-Gai-Feature.jpg'
            ],
            [
                'restaurant_id' => '6',
                'name' => 'Pla Rad Prik',
                'description' => 'Pesce, peperoncino, aglio, zenzero, carote, peperoni',
                'price' => '15.99',
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://foodof.com/media/popup/image_popup/uploads/img/recette-2c5cb652-e7ee-4f89-bd1f-0ef0b98fa851.jpeg'
            ],
            [
                'restaurant_id' => '6',
                'name' => 'Yum Nua',
                'description' => 'Manzo, cetriolo, coriandolo, cipolla, lime, peperoncino',
                'price' => '11.99',
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://basilandbubbly.com/wp-content/uploads/2020/03/thai-beef-salad-4.jpg'
            ],


            // 7 | RISTORANTE CINESE - DRAGO D'ORO
            [
                'restaurant_id' => '7',
                'name' => 'Ravioli cinesi al vapore',
                'description' => 'carne di maiale tritata, cipolla, zenzero, salsa di soia, farina, olio di sesamo',
                'price' => 8.50,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://cinaintavola.com/wp-content/uploads/2020/11/dscf4308-800x530.jpg'
            ],
            [
                'restaurant_id' => '7',
                'name' => 'Zuppa di wonton',
                'description' => 'carne di maiale tritata, gamberetti tritati, cipolla, cinese, acido di mela, salsa di soia, olio di sesamo',
                'price' => 7.50,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://www.giallozafferano.it/images/238-23853/Wonton-soup_450x300.jpg'
            ],
            [
                'restaurant_id' => '7',
                'name' => 'Pollo al limone',
                'description' => 'petto di pollo, farina, uovo, olio di semi, limone, zucchero, salsa di soia',
                'price' => 10.50,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://www.giallozafferano.it/images/196-19689/Pollo-al-limone_650x433_wm.jpg'
            ],
            [
                'restaurant_id' => '7',
                'name' => 'Maiale agrodolce',
                'description' => 'carne di maiale, farina, mais, olio di semi, peperoncino, aceto di vino bianco, zucchero, salsa di pomodoro',
                'price' => 11.50,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://www.giallozafferano.it/images/18-1811/Maiale-in-agrodolce_650x433_wm.jpg'
            ],
            [
                'restaurant_id' => '7',
                'name' => 'Spaghetti con gamberi',
                'description' => 'spaghetti di riso, gamberi, uova, piselli, carote, cipolla, salsa di soia, olio di sesamo',
                'price' => 9.50,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://www.lacucinaimperfetta.com/wp-content/uploads/2014/02/Spaghetti-di-riso-con-gamberi-e-verdure.jpg'
            ],
            [
                'restaurant_id' => '7',
                'name' => 'Manzo cipolla e peperoncino',
                'description' => 'manzo, cipolla, peperoncino, salsa di soia, amido di mais, olio di semi',
                'price' => 13.50,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://www.foodandwineitalia.com/wp-content/uploads/elementor/thumbs/Chili-di-costine-di-manzo-con-cipolla-rossa-sottaceto-pm0g00zrliw4rfawnqcmpo2xyljtloigrdf49qe248.jpg'
            ],
            [
                'restaurant_id' => '7',
                'name' => 'Pancake cinese',
                'description' => 'farina, uova, latte, zucchero, olio di semi, sciroppo di mais, cannella',
                'price' => 4.50,
                'vegetarian' => 1,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://www.giallozafferano.it/images/226-22636/Fluffy-pancake_650x433_wm.jpg'
            ],
            [
                'restaurant_id' => '7',
                'name' => 'Riso saltato con verdure',
                'description' => 'riso, carote, piselli, cipolla, salsa di soia, olio di semi, uovo, zucchine',
                'price' => 8.50,
                'vegetarian' => 1,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://cdn.ilclubdellericette.it/wp-content/uploads/2018/06/riso-saltato-1200x630.jpg'
            ],
            [
                'restaurant_id' => '7',
                'name' => 'Tofu in salsa di ostriche',
                'description' => 'tofu, cipolla, salsa di ostriche, olio di semi, peperoncino',
                'price' => 9.50,
                'vegetarian' => 1,
                'vegan' => 1,
                'glutenfree' => 1,
                'img' => 'https://i0.wp.com/frontierenews.it/wp-content/uploads/2011/09/tofu-con-aglio-e-salsa-di-ostriche.jpg'
            ],
            [
                'restaurant_id' => '7',
                'name' => 'Insalata di alghe',
                'description' => 'alghe, sesamo, aceto di riso, zucchero, sale',
                'price' => 6.50,
                'vegetarian' => 1,
                'vegan' => 1,
                'glutenfree' => 1,
                'img' => 'https://www.cucinare.it/uploads/wp-content/uploads/2015/11/insalata_di_alghe.jpg'
            ],


            // 8 | RISTORANTE INDIANO - TAJ MAHAL PALACE HOTEL RESTAURANT
            [
                'restaurant_id' => '8',
                'name' => 'Pollo al burro',
                'description' => 'Pollo, burro, pomodoro, spezie',
                'price' => 12.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://images.immediate.co.uk/production/volatile/sites/30/2021/02/butter-chicken-ac2ff98.jpg'
            ],
            [
                'restaurant_id' => '8',
                'name' => 'Palak Paneer',
                'description' => 'Spinaci, formaggio, curry',
                'price' => 10.99,
                'vegetarian' => 1,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://healthynibblesandbits.com/wp-content/uploads/2020/01/Saag-Paneer-FF.jpg'
            ],
            [
                'restaurant_id' => '8',
                'name' => 'Pollo Tandoori',
                'description' => 'Pollo, yogurt, spezie.',
                'price' => 13.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://www.cubesnjuliennes.com/wp-content/uploads/2022/12/Tandoori-Chicken-Recipe.jpg'
            ],
            [
                'restaurant_id' => '8',
                'name' => 'Chana Masala',
                'description' => 'Ceci, pomodoro, cipolle, erbe aromatiche',
                'price' => 9.99,
                'vegetarian' => 1,
                'vegan' => 1,
                'glutenfree' => 1,
                'img' => 'https://www.indianhealthyrecipes.com/wp-content/uploads/2021/08/chana-masala-recipe.jpg'
            ],
            [
                'restaurant_id' => '8',
                'name' => 'Aloo Gobi',
                'description' => 'Cavolfiore, patate, spezie, pomodoro',
                'price' => 8.99,
                'vegetarian' => 1,
                'vegan' => 1,
                'glutenfree' => 1,
                'img' => 'https://www.seriouseats.com/thmb/gTVjyFHq-N3iyv08113cBQWCTv8=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/20220303-aloo-gobi-vicky-wasik-35-c9afccd574534761886e5964f34586e1.jpg'
            ],
            [
                'restaurant_id' => '8',
                'name' => 'Pollo Tikka Masala',
                'description' => 'Pollo, pomodoro e spezie',
                'price' => 14.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://www.seriouseats.com/thmb/DbQHUK2yNCALBnZE-H1M2AKLkok=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/chicken-tikka-masala-for-the-grill-recipe-hero-2_1-cb493f49e30140efbffec162d5f2d1d7.JPG'
            ],
            [
                'restaurant_id' => '8',
                'name' => 'Pollo Saag',
                'description' => 'Chicken, curry',
                'price' => 12.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://www.cubesnjuliennes.com/wp-content/uploads/2020/09/Palak-Chicken-Saag-Recipe.jpg'
            ],
            [
                'restaurant_id' => '8',
                'name' => 'Vegetable Biryani',
                'description' => 'riso, verdure miste, spezie e erbe aromatiche',
                'price' => 11.99,
                'vegetarian' => 1,
                'vegan' => 1,
                'glutenfree' => 1,
                'img' => 'https://images.immediate.co.uk/production/volatile/sites/30/2020/10/Vegetable-Biryani-With-Green-Raita-159c15d.jpg?resize=768,574'
            ],
            [
                'restaurant_id' => '8',
                'name' => 'Samosas',
                'description' => 'Pasta, patate, piselli, carne',
                'price' => 3.99,
                'vegetarian' => 1,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://hips.hearstapps.com/hmg-prod/images/delish-091621-samosas-04-jg-1632847515.jpg?crop=0.888671875xw:1xh;center,top&resize=1200:*'
            ],
            [
                'restaurant_id' => '8',
                'name' => 'Naan',
                'description' => 'Farina',
                'price' => 2.49,
                'vegetarian' => 1,
                'vegan' => 1,
                'glutenfree' => 0,
                'img' => 'https://www.ilcuoreinpentola.it/wp-content/uploads/2021/06/pane-naan.jpg'
            ],


            // 9 | RISTORANTE GRECO - THE FUNKY GOURMET
            [
                'restaurant_id' => '9',
                'name' => 'Moussaka',
                'description' => 'Melanzane, patate, carne macinata, salsa di pomodoro',
                'price' => 12.5,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://www.giallozafferano.it/images/0-25/Moussaka_450x300.jpg',
            ],
            [
                'restaurant_id' => '9',
                'name' => 'Souvlaki',
                'description' => 'Spiedini di maiale, pollo o agnello con verdure',
                'price' => 9.5,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://images.prismic.io/gatsbyshopify-test/b450f1a2-5d27-49a8-9b0e-031de06b0acf_IMG_1316.gif?auto=compress%2Cformat&rect=136%2C0%2C1153%2C950&w=728&h=600   ',
            ],
            [
                'restaurant_id' => '9',
                'name' => 'Dolmades',
                'description' => 'Foglie di vite, riso, erbe aromatiche',
                'price' => 8.25,
                'vegetarian' => 1,
                'vegan' => 1,
                'glutenfree' => 1,
                'img' => 'https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2017/06/istock-920393181.jpg',
            ],
            [
                'restaurant_id' => '9',
                'name' => 'Spanakopita',
                'description' => 'Spinaci, formaggio feta, pasta fillo',
                'price' => 10.75,
                'vegetarian' => 1,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://www.thespruceeats.com/thmb/2Fk-NEscVoBNWDuzbiQw-LyS-QQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/spinach-pie-with-feta-spanakopita-1706022_hero-01-80cc6ee388474e7aad68e1d009766967.jpg',
            ],
            [
                'restaurant_id' => '9',
                'name' => 'Avgolemono',
                'description' => 'Brodo di pollo o vegetale, uova, succo di limone',
                'price' => 7.5,
                'vegetarian' => 1,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://i2.wp.com/www.downshiftology.com/wp-content/uploads/2022/09/Avgolemono-Soup-main-1.jpg',
            ],
            [
                'restaurant_id' => '9',
                'name' => 'Kofta',
                'description' => 'Spiedini di carne macinata speziata',
                'price' => 11.25,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://images.themodernproper.com/billowy-turkey/production/posts/2020/Beef-Kofta-12.jpg?w=960&h=960&q=82&fm=jpg&fit=crop&dm=1599768448&s=26faafe9a24acdcc2928ff79ae2d28fa',
            ],
            [
                'restaurant_id' => '9',
                'name' => 'Pastitsio',
                'description' => 'Pasta, carne macinata, besciamella',
                'price' => 13.5,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://www.recipetineats.com/wp-content/uploads/2021/02/Pastitsio-_4-SQ.jpg',
            ],
            [
                'restaurant_id' => '9',
                'name' => 'Fasolada',
                'description' => 'Zuppa di fagioli',
                'price' => 8.75,
                'vegetarian' => 1,
                'vegan' => 1,
                'glutenfree' => 1,
                'img' => 'https://www.mygreekdish.com/wp-content/uploads/2014/01/Traditional-Greek-bean-soup-recipe-Fasolada.jpeg',
            ],
            [
                'restaurant_id' => '9',
                'name' => 'Horiatiki',
                'description' => 'Insalata, formaggio feta, olive',
                'price' => 9.25,
                'vegetarian' => 1,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://www.mygreekdish.com/wp-content/uploads/2013/05/Traditional-Greek-Salad-recipe-Horiatiki-Xoriatiki-1-scaled.jpg',
            ],
            [
                'restaurant_id' => '9',
                'name' => 'Koulouri',
                'description' => 'Anelli di pane di sesamo',
                'price' => 4.5,
                'vegetarian' => 1,
                'vegan' => 1,
                'glutenfree' => 0,
                'img' => 'https://www.mygreekdish.com/wp-content/uploads/2014/03/Greek-Sesame-Bread-rings-recipe-Koulouri-Thessalonikis-1-scaled.jpg',
            ],


            // 10 | RISTORANTE FRANCESE - L'AMBROISIE
            [
                'restaurant_id' => '10',
                'name' => 'Boeuf Bourguignon',
                'description' => 'Manzo, carote, cipolle, vino rosso',
                'price' => 15.50,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://www.giallozafferano.it/images/238-23861/Boeuf-bourguignon_450x300.jpg'
            ],
            [
                'restaurant_id' => '10',
                'name' => 'Coq au Vin',
                'description' => 'Pollo, carote, cipolle, vino rosso',
                'price' => 14.50,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://images.immediate.co.uk/production/volatile/sites/30/2012/01/coq-au-vin-3740fe3.jpg?resize=768,574'
            ],
            [
                'restaurant_id' => '10',
                'name' => 'Cassoulet',
                'description' => 'Fagioli, salsiccia, maiale, aglio',
                'price' => 13.50,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://media-assets.lacucinaitaliana.it/photos/61fd327476fbfc8fddc036e3/16:9/w_1280,c_limit/cassoulet-alla-francese.jpg'
            ],
            [
                'restaurant_id' => '10',
                'name' => 'Ratatouille',
                'description' => 'Peperoni, zucchine, melanzane, cipolle',
                'price' => 12.50,
                'vegetarian' => 1,
                'vegan' => 1,
                'glutenfree' => 1,
                'img' => 'https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2021/08/ratatouille-10.jpg'
            ],
            [
                'restaurant_id' => '10',
                'name' => 'Quiche Lorraine',
                'description' => 'Pasta brisee, pancetta, panna, uova',
                'price' => 9.50,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://blog.giallozafferano.it/dulcisinforno/wp-content/uploads/2023/03/Quiche-Lorraine-2607.jpg'
            ],
            [
                'restaurant_id' => '10',
                'name' => 'Bouillabaisse',
                'description' => 'Pesce di mare misto, pomodoro, cipolle, aglio',
                'price' => 16.50,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://www.finedininglovers.it/sites/g/files/xknfdk1106/files/2020-12/Bouillabaisse.jpg'
            ],
            [
                'restaurant_id' => '10',
                'name' => 'Beef Tartare',
                'description' => 'Manzo crudo, salsa Worcestershire, capperi, uovo',
                'price' => 18.50,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://upload.wikimedia.org/wikipedia/commons/d/db/Classic_steak_tartare.jpg'
            ],
            [
                'restaurant_id' => '10',
                'name' => 'Tarte Tatin',
                'description' => 'Mele, pasta brisee, burro, zucchero',
                'price' => 8.50,
                'vegetarian' => 1,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://i0.wp.com/www.piccolericette.net/piccolericette/wp-content/uploads/2015/11/1303_tarte.jpg?resize=895%2C616&ssl=1'
            ],
            [
                'restaurant_id' => '10',
                'name' => 'Crème brûlée',
                'description' => 'Panna, uova, zucchero, vaniglia',
                'price' => 7.50,
                'vegetarian' => 1,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2012/06/ricetta-creme-brulee/_jcr_content/header-par/image_single.img.jpg/1613040818292.jpg'
            ],
            [
                'restaurant_id' => '10',
                'name' => 'Mousse au chocolat',
                'description' => 'Cioccolato fondente, panna, uova, zucchero',
                'price' => 8.50,
                'vegetarian' => 1,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://assets.afcdn.com/recipe/20200304/108812_w1024h576c1cx960cy540cxb1920cyb1080.jpg'
            ],


            // 11 | RISTORANTE TURCO - 360 INSTANBUL
            [
                'restaurant_id' => '11',
                'name' => 'Baklava',
                'description' => 'Pasta fillo, noci tritate, burro, zucchero',
                'price' => '8.50',
                'vegetarian' => '1',
                'vegan' => '0',
                'glutenfree' => '0',
                'img' => 'https://www.tavolartegusto.it/wp/wp-content/uploads/2022/08/Baklava.jpg'
            ],
            [
                'restaurant_id' => '11',
                'name' => 'Doner Kebab',
                'description' => 'Carne allo spiedo, verdure, pane pita',
                'price' => '12.50',
                'vegetarian' => '0',
                'vegan' => '0',
                'glutenfree' => '0',
                'img' => 'https://www.thespruceeats.com/thmb/ao7czXh1afSBamtQnDUilsLD3uc=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/doner-kebab-recipe-4171703-hero-01-c14d8b7189df4685a50bae311317f831.jpg'
            ],
            [
                'restaurant_id' => '11',
                'name' => 'Manti',
                'description' => 'Carne macinata, cipolle, salsa allo yogurt',
                'price' => '14.50',
                'vegetarian' => '0',
                'vegan' => '0',
                'glutenfree' => '0',
                'img' => 'https://www.panningtheglobe.com/wp-content/uploads/2013/11/turkish-manti-web-final.jpg'
            ],
            [
                'restaurant_id' => '11',
                'name' => 'Iskender Kebab',
                'description' => 'Carne allo spiedo, pomodori, peperoni, yogurt, burro',
                'price' => '16.00',
                'vegetarian' => '0',
                'vegan' => '0',
                'glutenfree' => '0',
                'img' => 'https://www.chocolatesandchai.com/wp-content/uploads/2022/03/Iskender-Kebab-Featured.jpg'
            ],
            [
                'restaurant_id' => '11',
                'name' => 'Pide',
                'description' => 'Pasta, formaggio, pomodori, peperoni, carne o verdure',
                'price' => '9.50',
                'vegetarian' => '1',
                'vegan' => '0',
                'glutenfree' => '0',
                'img' => 'https://www.giverecipe.com/wp-content/uploads/2020/08/How-to-make-Turkish-pide.jpg'
            ],
            [
                'restaurant_id' => '11',
                'name' => 'Lahmacun',
                'description' => 'Pasta, carne macinata, pomodori, peperoni',
                'price' => '7.50',
                'vegetarian' => '0',
                'vegan' => '0',
                'glutenfree' => '0',
                'img' => 'https://www.ilsalottoturco.com/wp-content/uploads/2021/01/Lahmacun2.jpg'
            ],
            [
                'restaurant_id' => '11',
                'name' => 'Manti',
                'description' => 'Pasta, zucca, cipolle, salsa allo yogurt',
                'price' => '13.50',
                'vegetarian' => '1',
                'vegan' => '0',
                'glutenfree' => '0',
                'img' => 'https://www.giverecipe.com/wp-content/uploads/2013/03/Turkish-manti-dumplings.jpg'
            ],
            [
                'restaurant_id' => '11',
                'name' => 'Patlican Musakka',
                'description' => 'Melanzane, patate, carne macinata, pomodori',
                'price' => '15.00',
                'vegetarian' => '0',
                'vegan' => '0',
                'glutenfree' => '0',
                'img' => 'https://cdn.ye-mek.net/App_UI/Img/out/650/2014/09/firinda-patlican-musakka-resimli-yemek-tarifi(15).jpg'
            ],
            [
                'restaurant_id' => '11',
                'name' => 'Kofte',
                'description' => 'Carne macinata, cipolle, prezzemolo, spezie',
                'price' => '10.50',
                'vegetarian' => '0',
                'vegan' => '0',
                'glutenfree' => '0',
                'img' => 'https://www.turismo.it/typo3temp/pics/d2be10fe1a.jpg'
            ],
            [
                'restaurant_id' => '11',
                'name' => 'Pilav (riso)',
                'description' => 'Riso, burro, vermicelli, condimento',
                'price' => '6.50',
                'vegetarian' => '1',
                'vegan' => '1',
                'glutenfree' => '0',
                'img' => 'https://www.allrecipes.com/thmb/wQWWaFDWNXWpIU-YD7dQYSK42ws=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/203951_sarahs-rice-pilaf_abapplez-fb4197f309d742938a977dbb262eaaeb.jpg'
            ],


            // 12 | RISTORANTE LIBANESE - AL HALABI RESTAURANT
            [
                'restaurant_id' => '12',
                'name' => 'Hummus',
                'description' => 'Ceci, tahin, olio d\'oliva, aglio',
                'price' => 5.99,
                'vegetarian' => 1,
                'vegan' => 1,
                'glutenfree' => 1,
                'img' => 'https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2022/03/Hummus-di-ceci-foto-finale.jpg',
            ],
            [
                'restaurant_id' => '12',
                'name' => 'Tabbouleh',
                'description' => 'Prezzemolo, pomodori, cipolle, bulgur, succo di limone',
                'price' => 7.99,
                'vegetarian' => 1,
                'vegan' => 1,
                'glutenfree' => 0,
                'img' => 'https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2022/07/12-tabbouleh-servire-1.jpg',
            ],
            [
                'restaurant_id' => '12',
                'name' => 'Moutabbal',
                'description' => 'Melanzane grigliate, tahin, aglio',
                'price' => 6.99,
                'vegetarian' => 1,
                'vegan' => 1,
                'glutenfree' => 1,
                'img' => 'https://www.acaperinthekitchen.com/wp-content/uploads/2019/08/Moutabbal-the-Classic-Smoky-Aubergine-Tahini-Dip.jpg',
            ],
            [
                'restaurant_id' => '12',
                'name' => 'Manakeesh',
                'description' => 'Impasto, condimento zaatar',
                'price' => 9.99,
                'vegetarian' => 1,
                'vegan' => 1,
                'glutenfree' => 0,
                'img' => 'https://silkroadrecipes.com/wp-content/uploads/2021/03/Manakeesh-Recipe-Manakish-square.jpg',
            ],
            [
                'restaurant_id' => '12',
                'name' => 'Foul Mudammas',
                'description' => 'Fave, aglio, succo di limone',
                'price' => 4.99,
                'vegetarian' => 1,
                'vegan' => 1,
                'glutenfree' => 1,
                'img' => 'https://www.sbs.com.au/food/sites/sbs.com.au.food/files/foul-mudammas.jpg',
            ],
            [
                'restaurant_id' => '12',
                'name' => 'Kibbeh',
                'description' => 'Carne macinata, bulgur, spezie',
                'price' => 12.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://www.simplyleb.com/wp-content/uploads/Kibbi-26.jpg',
            ],
            [
                'restaurant_id' => '12',
                'name' => 'Fatayer',
                'description' => 'Pasta, spinaci, cipolle, succo di limone',
                'price' => 8.99,
                'vegetarian' => 1,
                'vegan' => 1,
                'glutenfree' => 0,
                'img' => 'https://www.kingarthurbaking.com/sites/default/files/2021-03/meat-and-cheese-fatayer.jpg',
            ],
            [
                'restaurant_id' => '12',
                'name' => 'Shawarma',
                'description' => 'Carne marinata, verdure, pane pita',
                'price' => 14.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://www.lemonblossoms.com/wp-content/uploads/2020/06/Chicken-Shawarma-Recipe-S5.jpg',
            ],
            [
                'restaurant_id' => '12',
                'name' => 'Lamb kebab',
                'description' => 'Agnello marinato, verdure, riso',
                'price' => 16.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://www.foodandwine.com/thmb/dhKrbGTazKynMGBntuGIA4WAULo=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/200906-r-xl-middle-eastern-lamb-skewers-dea6eb0140534130b22f756cf42ef733.jpg',
            ],
            [
                'restaurant_id' => '12',
                'name' => 'Baklava',
                'description' => 'Pasta fillo, miele, noci',
                'price' => 5.99,
                'vegetarian' => 1,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://cdn.ilclubdellericette.it/wp-content/uploads/2016/12/baklava-790x500.jpeg',
            ],


            // 13 | RISTORANTE VIETNAMITA - TEMPLE CLUB
            [
                'restaurant_id' => '13',
                'name' => 'Pho',
                'description' => 'Brodo di carne, tagliatelle di riso, carne di manzo, germogli di soia, cipollotto, coriandolo, limone, salsa di peperoncino e salsa di pesce',
                'price' => 8.50,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://www.foodandwine.com/thmb/NpvuFzYVBmhs5G9VoqdQ5m4kMuM=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/chicken-pho-14-FT-RECIPE1222-b82ecb87d5fa4bf0af1b4468c807a560.jpg'
            ],
            [
                'restaurant_id' => '13',
                'name' => 'Banh Mi',
                'description' => 'Panino croccante, maiale o pollo, cetrioli, carote, daikon, coriandolo, peperoncino, maionese',
                'price' => 6.50,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://static.onecms.io/wp-content/uploads/sites/43/2023/01/31/roasted-pork-banh-mi-vietnamese-sandwitch-ddmfs-3X4-0332.jpg'
            ],
            [
                'restaurant_id' => '13',
                'name' => 'Bun Cha',
                'description' => 'Carne di maiale marinata, vermicelli di riso, foglie di lattuga, germogli di soia, menta, coriandolo, salsa di pesce',
                'price' => 9.50,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://eatlittlebird.com/wp-content/uploads/2019/01/bun-cha-31.jpg'
            ],
            [
                'restaurant_id' => '13',
                'name' => 'Goi Cuon',
                'description' => 'Involtini freschi di riso, carne di maiale o gamberi, vermicelli di riso, lattuga, menta, germogli di soia, salsa di arachidi e salsa di pesce',
                'price' => 6.50,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://travelfoodatlas.com/wp-content/uploads/2022/07/Vietnamese-Spring-Rolls-735x509.jpg'
            ],
            [
                'restaurant_id' => '13',
                'name' => 'Com Tam',
                'description' => 'Riso spezzato, carne di maiale marinata, uovo fritto, cetrioli, pomodori, aceto di riso, salsa di soia',
                'price' => 9.00,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://theroamingfork.com/wp-content/uploads/2022/10/Com-Tam-Hero.jpg'
            ],
            [
                'restaurant_id' => '13',
                'name' => 'Bun Bo Hue',
                'description' => 'Brodo di ossa di manzo, tagliatelle di riso, carne di manzo, carne di maiale, limetta, peperoncino, germogli di soia, cipollotto, coriandolo',
                'price' => 8.50,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://i0.wp.com/seonkyounglongest.com/wp-content/uploads/2017/08/Bun-Bo-Hue-46.jpg?resize=1000%2C562'
            ],
            [
                'restaurant_id' => '13',
                'name' => 'Ca Kho To',
                'description' => 'Pesce in salsa di caramello, cipolla, aglio, peperoncino, coriandolo',
                'price' => 11.50,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://images.squarespace-cdn.com/content/v1/52d3fafee4b03c7eaedee15f/77e3f85a-c89d-40e9-b3c5-23c6f2a0537b/ca+kho2+16x9.jpg?format=1000w'
            ],
            [
                'restaurant_id' => '13',
                'name' => 'Banh Xeo',
                'description' => 'frittelle di riso, pancetta, gamberi, germogli di soia, fagioli mungo, cipolla verde, menta, salsa di pesce',
                'price' => 7.50,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://www.sbs.com.au/food/sites/sbs.com.au.food/files/banh-xeo_1.jpg'
            ],
            [
                'restaurant_id' => '13',
                'name' => 'Com Ga Xao Xa Ot',
                'description' => 'riso spezzato, pollo, peperoncino, citronella, cipolla, aglio, zucchine, salsa di soia',
                'price' => 9.00,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://yummyvietnam.net/wp-content/uploads/2019/07/Ga-xao-sa-ot-Recipe-Vietnamese-Chicken-with-lemongrass-and-chili-1.jpg'
            ],
            [
                'restaurant_id' => '13',
                'name' => 'Hu Tieu',
                'description' => 'brodo di ossa di maiale, tagliatelle di riso, carne di maiale, gamberi, germogli di soia, cipolla verde, coriandolo, limetta, salsa di peperoncino',
                'price' => 8.50,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://vietnamnomad.com/wp-content/uploads/2022/09/The-origin-of-hu-tieu-Vietnamnomad.jpg'
            ],


            // 14 | STEACKHOUSE - NUSR-ET STEAKHOUSE
            [
                'restaurant_id' => '14',
                'name' => 'Rib Eye Steak',
                'description' => 'Costata di manzo, sale, pepe, purè di patate, fagiolini.',
                'price' => 26.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://www.foodandwine.com/thmb/altRB9HNrVnRjN774fzCdXzbSjI=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/201402-xl-butter-basted-rib-eye-steak-2000-7448db4142e54ceea2515d65872addf4.jpg'
            ],
            [
                'restaurant_id' => '14',
                'name' => 'New York Strip Steak',
                'description' => 'Filetto di manzo, aglio, rosmarino, patate arrosto, asparagi.',
                'price' => 28.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://www.braciamiancora.com/wp-content/uploads/2021/04/grill_strip_featured.jpg'
            ],
            [
                'restaurant_id' => '14',
                'name' => 'Filet Mignon',
                'description' => 'Filetto di manzo, sale, pepe, verdure miste, purè di patate all\'aglio.',
                'price' => 30.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://i2.wp.com/www.downshiftology.com/wp-content/uploads/2023/02/Filet-Mignon-main.jpg'
            ],
            [
                'restaurant_id' => '14',
                'name' => 'Double Bacon Cheeseburger',
                'description' => 'Pan brioche, hamburger di manzo, bacon, formaggio americano, lattuga, pomodoro, maionese',
                'price' => 12.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://static.mymenu.it/multimedia/img/dish/159241/Smash%20Burger.jpg'
            ],
            [
                'restaurant_id' => '14',
                'name' => 'Grilled Chicken Sandwich',
                'description' => 'Pane, petto di pollo alla griglia, formaggio svizzero, lattuga, pomodoro, senape, patate dolci fritte.',
                'price' => 10.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://assets.bonappetit.com/photos/5b69f160dbdc967b93bc1c42/1:1/w_3019,h_3019,c_limit/ba-grilled-chicken-sando.jpg'
            ],
            [
                'restaurant_id' => '14',
                'name' => 'Salmon Entree',
                'description' => 'Filetto di salmone grigliato, limone, aceto , riso pilaf, spinaci saltati',
                'price' => 22.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://live.staticflickr.com/5804/23083635264_0258649b34_b.jpg'
            ],
            [
                'restaurant_id' => '14',
                'name' => 'Spiedini di verdure',
                'description' => 'Funghi saltati, peperoni, cipolle e zucchine, aglio, olio d\'oliva, quinoa',
                'price' => 16.99,
                'vegetarian' => 1,
                'vegan' => 1,
                'glutenfree' => 1,
                'img' => 'https://healthyrecipesblogs.com/wp-content/uploads/2019/06/vegetable-kabobs-featured-2021.jpg'
            ],
            [
                'restaurant_id' => '14',
                'name' => 'Caesar Salad',
                'description' => 'Lattuga romana, parmigiano, crostini, salsa Caesar, pane all\'aglio',
                'price' => 8.99,
                'vegetarian' => 1,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2021/07/Caesar-salad-0D6A0393-1200x675.jpg'
            ],
            [
                'restaurant_id' => '14',
                'name' => 'Baked Potato',
                'description' => 'Patate al forno, burro, panna acida, erba cipollina,pancetta, broccoli',
                'price' => 6.99,
                'vegetarian' => 1,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://www.acouplecooks.com/wp-content/uploads/2021/09/Baked-Potato-Toppings-009.jpg'
            ],
            [
                'restaurant_id' => '14',
                'name' => 'Brownie Sundae',
                'description' => 'Brownie caldo, gelato alla vaniglia, panna montata, sciroppo di cioccolato e ciliegina',
                'price' => 7.99,
                'vegetarian' => 1,
                'vegan' => 0,
                'glutenfree' => 1,
                'img' => 'https://d9hyo6bif16lx.cloudfront.net/live/img/production/detail/menu/ice-cream_sundaes_caramel-fudge-brownie-sundae.jpg'
            ],


            // 15 | RISTORANTE PIZZERIA - ROSSO POMODORO
            [
                'restaurant_id' => '15',
                'name' => 'Margherita',
                'description' => 'pomodoro, mozzarella, basilico',
                'price' => 5.50,
                'vegetarian' => 1,
                'vegan' => 0,
                "glutenfree" => 1,
                'img' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2019/03/pizza-margherita/jcr:content/header-par/image-single.img10.jpg/1553057913437.jpg'
            ],
            [
                'restaurant_id' => '15',
                'name' => 'Capricciosa',
                'description' => 'pomodoro, mozzarella, funghi, prosciutto, olive',
                'price' => '8.00',
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 1,
                'img' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2018/04/pizza-capricciosa/jcr:content/header-par/image-single.img10.jpg/1522911194266.jpg'
            ],
            [
                'restaurant_id' => '15',
                'name' => 'Vegetariana',
                'description' => 'pomodoro, mozzarella, melanzane, zucchine, peperoni, cipolle',
                'price' => '7.50',
                'vegetarian' => 1,
                'vegan' => 0,
                "glutenfree" => 1,
                'img' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2020/06/pizza-vegetariana/jcr:content/header-par/image-single.img10.jpg/1593705439785.jpg'
            ],
            [
                'restaurant_id' => '15',
                'name' => 'Diavola',
                'description' => 'pomodoro, mozzarella, salame piccante',
                'price' => '7.00',
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 1,
                'img' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2018/05/pizza-diavola/jcr:content/header-par/image-single.img10.jpg/1525996097949.jpg'
            ],
            [
                'restaurant_id' => '15',
                'name' => 'Ripieno Fritto',
                'description' => 'mozzarella, pomodoro, ricotta, salame',
                'price' => '7.50',
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 1,
                'img' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2019/03/pizza-napoli/jcr:content/header-par/image-single.img10.jpg/1553058017537.jpg'
            ],
            [
                'restaurant_id' => '15',
                'name' => 'Prosciutto e Funghi',
                'description' => 'pomodoro, mozzarella, prosciutto, funghi',
                'price' => '7.50',
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 1,
                'img' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2018/09/pizza-prosciutto-e-funghi/jcr:content/header-par/image-single.img10.jpg/1537486390342.jpg'
            ],
            [
                'restaurant_id' => '15',
                'name' => 'Quattro Formaggi',
                'description' => 'pomodoro, mozzarella, gorgonzola, fontina, parmigiano',
                'price' => '8.00',
                'vegetarian' => 1,
                'vegan' => 0,
                "glutenfree" => 1,
                'img' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2019/10/pizza-4-formaggi/jcr:content/header-par/image-single.img10.jpg/1570040487214.jpg'
            ],
            [
                'restaurant_id' => '15',
                'name' => 'Salsiccia e Friarielli',
                'description' => 'pomodoro, mozzarella, salsiccia, friarielli, peperoncino',
                'price' => '8.50',
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 1,
                'img' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2019/02/pizza-salsiccia-e-friarielli/jcr:content/header-par/image-single.img10.jpg/1550679561219.jpg'
            ],
            [
                'restaurant_id' => '15',
                'name' => 'Tonno e Cipolle',
                'description' => 'pomodoro, mozzarella, tonno, cipolle, olive',
                'price' => '7.50',
                'vegetarian' => 0,
                'vegan' => 0,
                "glutenfree" => 1,
                'img' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2019/10/pizza-tonno-e-cipolla/jcr:content/header-par/image-single.img10.jpg/1570040439312.jpg'
            ],
            [
                'restaurant_id' => '15',
                'name' => 'Americana',
                'description' => 'pomodoro, mozzarella, patatine fritte',
                'price' => '6.50',
                'vegetarian' => 1,
                'vegan' => 0,
                "glutenfree" => 1,
                'img' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2021/04/pizza-con-patatine-fritte/jcr:content/header-par/image-single.img10.jpg/1617321655016.jpg'
            ],


            // 16 | FAST FOOD - MC DONALD'S
            [
                'restaurant_id' => '16',
                'name' => 'Hamburger',
                'description' => 'Carne bovina, pane, cetrioli, ketchup, senape',
                'price' => '2.50',
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://www.mcdonalds.it/sites/default/files/styles/compressed/public/products/hamburger--hero-dsk.jpg?itok=DCRRoBuR',
            ],
            [
                'restaurant_id' => '16',
                'name' => 'McChicken',
                'description' => 'Crispy pollo, pane, lattuga, maionese, bacon',
                'price' => '4.20',
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://s7d1.scene7.com/is/image/mcdonalds/t-mcdonalds-mcchicken-BB-1:1-3-product-tile-desktop?wid=765&hei=472&dpr=off',
            ],
            [
                'restaurant_id' => '16',
                'name' => 'McWrap Chicken Bacon',
                'description' => 'Crispy pollo, bacon, pane wrap, lattuga, pomodoro, formaggio fuso',
                'price' => '6.50',
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://s7d1.scene7.com/is/image/mcdonalds/mcdonalds-chicken-bacon-signature-mcwrap-crispy:1-3-product-tile-desktop?wid=829&hei=513&dpr=off',
            ],
            [
                'restaurant_id' => '16',
                'name' => 'Big Tasty',
                'description' => 'Carne di manzo, pane, lattuga, pomodoro, cipolle, formaggio fuso, bacon, salsa Big Tasty',
                'price' => '7.70',
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://s7d1.scene7.com/is/image/mcdonalds/t-mcdonalds-big-tasty-single-bacon-BB:1-3-product-tile-desktop?wid=765&hei=472&dpr=off',
            ],
            [
                'restaurant_id' => '16',
                'name' => 'Filet-O-Fish',
                'description' => 'Pesce panato, pane, lattuga, salsa tartara',
                'price' => '4.00',
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://s7d1.scene7.com/is/image/mcdonalds/DC_202001_5926_Filet-O-Fish_HalfSlice_832x472:1-3-product-tile-desktop?wid=765&hei=472&dpr=off',
            ],
            [
                'restaurant_id' => '16',
                'name' => 'Veggie Burger',
                'description' => 'Pane ai semi di sesamo, hamburger vegetariano, lattuga, pomodoro, cetrioli, ketchup, senape',
                'price' => '4.20',
                'vegetarian' => 1,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://s7d1.scene7.com/is/image/mcdonalds/mcdonalds-Vegetable-Deluxe-2:1-3-product-tile-desktop?wid=829&hei=515&dpr=off',
            ],
            [
                'restaurant_id' => '16',
                'name' => 'Wrap Veggie',
                'description' => 'Pane wrap, hamburger vegetariano, lattuga, pomodoro, cetrioli, maionese',
                'price' => '5.50',
                'vegetarian' => 1,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://s7d1.scene7.com/is/image/mcdonalds/mcdonalds-The-Spicy-Veggie-One-new:1-3-product-tile-desktop?wid=829&hei=515&dpr=off',
            ],
            [
                'restaurant_id' => '16',
                'name' => 'Insalata Veggie',
                'description' => 'Lattuga, pomodoro, cetrioli, mais, formaggio grattugiato, noci, olive, dressing al balsamico',
                'price' => '5.00',
                'vegetarian' => 1,
                'vegan' => 1,
                'glutenfree' => 1,
                'img' => 'https://www.mcdonalds.it/sites/default/files/styles/compressed/public/products/insalata-mista-hero-dsk_0.jpg.webp?itok=ce0fGXCg',
            ],
            [
                'restaurant_id' => '16',
                'name' => 'Patatine Medie',
                'description' => 'Patate, olio di semi di girasole, sale',
                'price' => '2.50',
                'vegetarian' => 1,
                'vegan' => 1,
                'glutenfree' => 1,
                'img' => 'https://www.mcdonalds.it/sites/default/files/styles/compressed/public/products/patate-regolari_desktop_0.jpg?itok=7DFRX_KA',
            ],
            [
                'restaurant_id' => '16',
                'name' => 'Crispy McBacon',
                'description' => 'Carne bovina, pane, bacon, cetrioli, ketchup, salsa segreta',
                'price' => '5.50',
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://www.mcdonalds.it/sites/default/files/products/meta/crispy-mcbacon--hero-meta_0.jpg',
            ],


            // 17 | FAST FOOD - BURGER KING
            [
                'restaurant_id' => '17',
                'name' => 'Whopper',
                'description' => 'Pane, carne di manzo, lattuga, pomodoro, cetriolo, sottaceti, cipolla, ketchup, maionese.',
                'price' => 6.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://www.burgerking.it/site/assets/files/1046/whopper-1.jpg'
            ],
            [
                'restaurant_id' => '17',
                'name' => 'Cheeseburger',
                'description' => 'Pane, carne di manzo, formaggio, cetriolo, ketchup, senape.',
                'price' => 4.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://www.burgerking.it/site/assets/files/136968/1440x640_cheeseburger_kid.jpg'
            ],
            [
                'restaurant_id' => '17',
                'name' => 'Hamburger',
                'description' => 'Pane, carne di manzo, cetriolo, ketchup, senape.',
                'price' => 3.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://www.burgerking.it/site/assets/files/1744/1440x640_hamburger_kid.jpg'
            ],
            [
                'restaurant_id' => '17',
                'name' => 'Big King',
                'description' => 'Pane, due hamburger di manzo, formaggio, lattuga, salsa speciale, sottaceti, cipolla.',
                'price' => 7.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://www.burgerking.it/site/assets/files/1856/big_king.jpg'
            ],
            [
                'restaurant_id' => '17',
                'name' => 'Crispy Chicken',
                'description' => 'Panino, petto di pollo croccante, lattuga, maionese.',
                'price' => 5.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://www.burgerking.it/site/assets/files/1926/crispy-chicken.jpg'
            ],
            [
                'restaurant_id' => '17',
                'name' => 'Chicken Royale',
                'description' => 'Pane, petto di pollo, lattuga, maionese, pomodoro.',
                'price' => 6.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://www.burgerking.it/site/assets/files/1912/chicken-royale.jpg'
            ],
            [
                'restaurant_id' => '17',
                'name' => 'Big Fish',
                'description' => 'Panino, pesce, lattuga, salsa tartara.',
                'price' => 5.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://catholicvote.org/wp-content/uploads/2021/03/burgerfish.jpg'
            ],
            [
                'restaurant_id' => '17',
                'name' => 'Veggie Burger',
                'description' => 'Pane, burger vegetariano di soia, lattuga, pomodoro, cipolla, maionese.',
                'price' => 4.99,
                'vegetarian' => 1,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://funnyvegan.com/wp-content/uploads/2021/03/Funny-Vegan-news-plant-based-Whooper.png'
            ],
            [
                'restaurant_id' => '17',
                'name' => 'Impossible Whopper',
                'description' => 'Pane, burger vegetale Impossible, lattuga, pomodoro, cetriolo, sottaceti, cipolla, ketchup, maionese.',
                'price' => 7.99,
                'vegetarian' => 1,
                'vegan' => 1,
                'glutenfree' => 0,
                'img' => 'https://www.tutto-buono.it/media/articoli/1-imossiblewhopper.jpg'
            ],
            [
                'restaurant_id' => '17',
                'name' => 'French Fries',
                'description' => 'Patate tagliate a bastoncino, sale.',
                'price' => 2.99,
                'vegetarian' => 1,
                'vegan' => 1,
                'glutenfree' => 1,
                'img' => 'https://www.nicepng.com/png/detail/346-3464316_papas-fritas-burger-king-fries.png'
            ],


            // 18 | FAST FOOD - PIZZA HUT
            [
                'restaurant_id' => '18',
                'name' => 'Super Supreme',
                'description' => 'Peperoni, prosciutto, manzo, maiale, salsiccia italiana, cipolle rosse, funghi, peperoni verdi, olive nere',
                'price' => '19.99',
                'vegetarian' => '0',
                'vegan' => '0',
                'glutenfree' => '0',
                'img' => 'https://www.thepizzalads.com/wp-content/uploads/2017/08/Super-Supreme-Pizza-Hut-Pizza-Review.jpg'
            ],
            [
                'restaurant_id' => '18',
                'name' => 'Veggie Lover\'s',
                'description' => 'Funghi, cipolle rosse, peperoni verdi, pomodorini roma, olive nere',
                'price' => '17.99',
                'vegetarian' => '1',
                'vegan' => '1',
                'glutenfree' => '0',
                'img' => 'https://api.pizzahut.io/v1/content/en-ca/ca-1/images/pizza/pizza.veggie-lovers.48ba54d49ff2257671521b477967633a.1.jpg'
            ],
            [
                'restaurant_id' => '18',
                'name' => 'Pepperoni Lover\'s',
                'description' => 'Due volte i peperoni delle nostre altre pizze',
                'price' => '15.99',
                'vegetarian' => '0',
                'vegan' => '0',
                'glutenfree' => '0',
                'img' => 'https://api.pizzahut.io/v1/content/en-ca/ca-1/images/pizza/pizza.pepperoni-lovers.69f7bdf7b6f50a87eb2886934fe0be9f.1.jpg'
            ],
            [
                'restaurant_id' => '18',
                'name' => 'Meat Lover\'s',
                'description' => 'Pepperoni, prosciutto, manzo, salsiccia',
                'price' => '18.99',
                'vegetarian' => '0',
                'vegan' => '0',
                'glutenfree' => '0',
                'img' => 'https://a.storyblok.com/f/49069/1800x1800/148520caa0/favourites-bbq-meatlovers-pizza.jpg'
            ],
            [
                'restaurant_id' => '18',
                'name' => 'Hawaiian Luau',
                'description' => 'Prosciutto, ananas, peperoni verdi',
                'price' => '16.99',
                'vegetarian' => '0',
                'vegan' => '0',
                'glutenfree' => '0',
                'img' => 'https://cdn.tictuk.com/5053424701097026/b8254de3-09cc-e134-e004-a9bdc617d772.jpeg?a=cf08eba0-c61c-2548-4e0d-6766e18c0547'
            ],
            [
                'restaurant_id' => '18',
                'name' => 'BBQ Bacon Cheeseburger',
                'description' => 'Manzo, pancetta affumicata all\'hickory, cipolle e sottaceti, conditi con una salsa barbecue dolce e piccante',
                'price' => '20.99',
                'vegetarian' => '0',
                'vegan' => '0',
                'glutenfree' => '0',
                'img' => 'https://2.bp.blogspot.com/-eDIXViCX3K0/VJq9b5zylkI/AAAAAAAAjOI/QRI8zUrkMFc/s1600/pizza-hut-bbq-bacon-cheeseburger-pizza-01.JPG'
            ],
            [
                'restaurant_id' => '18',
                'name' => 'Vegan Vegetable',
                'description' => 'Peperoni verdi, cipolle rosse, funghi, pomodorini roma',
                'price' => '17.99',
                'vegetarian' => '1',
                'vegan' => '1',
                'glutenfree' => '0',
                'img' => 'https://api.pizzahut.io/v1/content/images/pizza/veg-supreme.6fcf716cd4ec19d7723f14b0b84459ec.1.jpg'
            ],
            [
                'restaurant_id' => '18',
                'name' => 'Ultimate Cheese Lover\'s',
                'description' => 'Mozzarella, provolone, cheddar bianco, asiago, fontina',
                'price' => '14.99',
                'vegetarian' => '1',
                'vegan' => '0',
                'glutenfree' => '0',
                'img' => 'https://api.pizzahut.io/v1/content/en-ca/ca-1/images/pizza/pizza.cheese-lovers.21455ca09617c38f3618f2b525dfed42.1.jpg'
            ],
            [
                'restaurant_id' => '18',
                'name' => 'Chicken Bacon Parmesan',
                'description' => 'Grilled chicken, hickory-smoked bacon and Parmesan-seasoned crust',
                'price' => '18.99',
                'vegetarian' => '0',
                'vegan' => '0',
                'glutenfree' => '0',
                'img' => 'https://4.bp.blogspot.com/-5EnSCINI7xE/UzrEfc0A2dI/AAAAAAAAcA0/8F2hLszcGTM/s1600/pizza-hut-chicken-bacon-tomato-garlic-parmesan-pizza-01.JPG'
            ],
            [
                'restaurant_id' => '18',
                'name' => 'Gluten-Free Veggie',
                'description' => 'Peperoni verdi, funghi, cipolle rosse e pomodori su una crosta senza glutine',
                'price' => '19.99',
                'vegetarian' => '1',
                'vegan' => '0',
                'glutenfree' => '1',
                'img' => 'https://hips.hearstapps.com/hmg-prod/images/pizza-hut-vegan-1561134054.jpg'
            ],


            // 19 | FAST FOOD - KFC
            [
                "restaurant_id" => 19,
                "name" => "Zinger Burger",
                "description" => "Filetto di pollo croccante, lattuga, maionese, panino al sesamo",
                "price" => 6.99,
                "vegetarian" => 0,
                "vegan" => 0,
                "glutenfree" => 0,
                "img" => "https://media.kfc.it/app/uploads/public/5ec/fe9/356/thumb_292_800_800_0_0_crop.jpg"
            ],
            [
                "restaurant_id" => 19,
                "name" => "3-Pezzi Tenders Meal",
                "description" => "3 pezzi of crispy tenders, bevanda media",
                "price" => 6.99,
                "vegetarian" => 0,
                "vegan" => 0,
                "glutenfree" => 0,
                "img" => "https://static.wikia.nocookie.net/kfc/images/1/1f/Kfc5162-tenders_or-tenders-3pc_combo.jpg/revision/latest?cb=20160229055349"
            ],
            [
                "restaurant_id" => 19,
                "name" => "Chicken Bowl",
                "description" => "Pollo popcorn, purè di patate, mais, sugo, formaggio, cipolle croccanti",
                "price" => 5.99,
                "vegetarian" => 0,
                "vegan" => 0,
                "glutenfree" => 0,
                "img" => "https://media.kfc.it/app/uploads/public/625/6c1/39d/6256c139d3113032505805.png"
            ],
            [
                "restaurant_id" => 19,
                "name" => "Famous Bowl",
                "description" => "Purè di patate, sugo, mais, pollo popcorn, formaggio, cipolle croccanti",
                "price" => 5.99,
                "vegetarian" => 0,
                "vegan" => 0,
                "glutenfree" => 0,
                "img" => "https://mma.prnewswire.com/media/805323/KFC_famous_bowls.jpg"
            ],
            [
                "restaurant_id" => 19,
                "name" => "Crispy Colonel Sandwich",
                "description" => "Filetto di pollo croccante, maionese, sottaceti, pan brioche",
                "price" => 5.99,
                "vegetarian" => 0,
                "vegan" => 0,
                "glutenfree" => 0,
                "img" => "https://i.ytimg.com/vi/Ooa3kYHrJgY/maxresdefault.jpg"
            ],
            [
                "restaurant_id" => 19,
                "name" => "Popcorn Nuggets",
                "description" => "Crispy popcorn chicken nuggets",
                "price" => 3.99,
                "vegetarian" => 0,
                "vegan" => 0,
                "glutenfree" => 0,
                "img" => "https://mymorningmocha.com/wp-content/uploads/2022/01/KFC-Style-Popcorn-Chicken-Recipe-Opengraph.jpg"
            ],
            [
                "restaurant_id" => 19,
                "name" => "Pot Pie",
                "description" => "Ripieno cremoso, pollo, carote, piselli, crosta",
                "price" => 4.99,
                "vegetarian" => 0,
                "vegan" => 0,
                "glutenfree" => 0,
                "img" => "https://www.tasteofhome.com/wp-content/uploads/2023/01/Pot_Pie_Image_2-KFC-Pot-Pies-for-Five-Dollars-DH-TOH-Resize-SOCIAL.jpg"
            ],
            [
                "restaurant_id" => 19,
                "name" => "Mac and Cheese Bowl",
                "description" => "Maccheroni, salsa al formaggio, pollo popcorn, miscela di tre formaggi",
                "price" => 5.99,
                "vegetarian" => 0,
                "vegan" => 0,
                "glutenfree" => 0,
                "img" => "https://images.ctfassets.net/h7j9u4fil4a3/3uP09lnog14v1qiARA2kNW/4ace54ea37e38b57fc08ad65498f77c4/kfc-us-introduces-mac-cheese-bowls-the-fan-favorite-side-dish-is-now-a-main-meal.jpg?w=950&h=633&fl=progressive&q=50&fm=jpg"
            ],
            [
                "restaurant_id" => 19,
                "name" => "Kids Meal",
                "description" => "1 pezzo di pollo, patatine fritte, bibita Capri Sun, biscotti con gocce di cioccolato",
                "price" => 4.49,
                "vegetarian" => 0,
                "vegan" => 0,
                "glutenfree" => 0,
                "img" => "https://kfc-menu.co.uk/wp-content/uploads/2022/07/mini-burger-kids-bucket.jpg"
            ],
            [
                "restaurant_id" => 19,
                "name" => "Crispy Chicken Tenders",
                "description" => "Crispy chicken tenders",
                "price" => 3.99,
                "vegetarian" => 0,
                "vegan" => 0,
                "glutenfree" => 0,
                "img" => "https://assets3.thrillist.com/v1/image/2888223/1200x630/flatten;crop_down;webp=auto;jpeg_quality=70"
            ],


            // 20 | FAST FOOD - SUBWAY
            [
                'restaurant_id' => '20',
                'name' => 'Italian B.M.T.',
                'description' => 'Peperoni, Salame, Prosciutto, Lattuga, Pomodoro, Cipolla Rossa, Sottaceti, Olive Nere, Peperoni Verdi, Aceto Di Vino Rosso, Maionese',
                'price' => 7.99,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://subwayisfresh.com.sg/wp-content/uploads/2022/01/italian-bmt-PH-594x334-1.jpeg'
            ],
            [
                'restaurant_id' => '20',
                'name' => 'Meatball Marinara',
                'description' => 'Polpette, Salsa Marinara, Lattuga, Pomodoro, Cipolla Rossa, Parmigiano, Condimento',
                'price' => 6.49,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://cdn.vox-cdn.com/thumbor/ftzL6fne6eWRijLfsYzpEM2BTo0=/0x0:1000x749/1200x800/filters:focal(419x335:579x495)/cdn.vox-cdn.com/uploads/chorus_image/image/64929552/Beyond_Sub.0.jpg'
            ],
            [
                'restaurant_id' => '20',
                'name' => 'Veggie Delite',
                'description' => 'Lattuga, Pomodoro, Cipolla Rossa, Cetrioli, Peperone Verde, Olive',
                'price' => 5.49,
                'vegetarian' => 1,
                'vegan' => 1,
                'glutenfree' => 1,
                'img' => 'https://www.subtogo.de/33745-abholservice/wp-content/uploads/sites/3/2023/02/6inch_SUB_Veggie-Delite-1.jpg'
            ],
            [
                'restaurant_id' => '20',
                'name' => 'Oven Roasted Chicken',
                'description' => 'Pollo Arrosto, Lattuga, Pomodoro, Cipolla Rossa, Cetrioli, Peperone Verde, Maionese',
                'price' => 6.49,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://1.bp.blogspot.com/-m0jC58gDuIw/Xg4bVXHtBbI/AAAAAAABJTE/526XoewkNJsbSpMCmARe35LNvmmKznHdwCLcBGAsYHQ/w1200-h630-p-k-no-nu/subway-6-inch-oven-roasted-sub.jpg'
            ],
            [
                'restaurant_id' => '20',
                'name' => 'Spicy Italian',
                'description' => 'Pepperoni, Salame, Lattuga, Pomodoro, Cipolla Rossa, Banana Peppers, Chipotle Southwest Sauce, Condimento',
                'price' => 6.49,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://i.pinimg.com/originals/a3/16/c5/a316c54879d548341c1d244996ff6d1a.jpg'
            ],
            [
                'restaurant_id' => '20',
                'name' => 'Steak and Cheese',
                'description' => 'Bistecca, Provolone, Lattuga, Pomodoro, Cipolla Rossa, Peperoni Verdi, Maionese',
                'price' => 7.49,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://www.fastfoodmenuprices.com/wp-content/uploads/2020/12/subway-steak-and-cheese-image.jpg'
            ],
            [
                'restaurant_id' => '20',
                'name' => 'Tuna',
                'description' => 'Insalata Di Tonno, Lattuga, Pomodoro, Cipolla Rossa, Cetrioli, Sottaceti, Maionese',
                'price' => 6.49,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://www.gannett-cdn.com/presto/2021/01/29/USAT/2b697721-e001-4dcc-a1b8-d701bd0a8df1-XXX_Subway_Tuna.jpg'
            ],
            [
                'restaurant_id' => '20',
                'name' => 'Turkey Breast',
                'description' => 'Petto di Tacchino, Lattuga, Pomodoro, Cipolla Rossa, Cetrioli, Maionese',
                'price' => 6.49,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://subwayisfresh.com.sg/wp-content/uploads/2022/01/turkey-SG-594x334-1.jpeg'
            ],
            [
                'restaurant_id' => '20',
                'name' => 'Chicken and Bacon Ranch Melt',
                'description' => 'Pollo, pancetta, formaggio Cheddar Monterey, lattuga, pomodoro, cipolla rossa, condimento Ranch',
                'price' => 7.49,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://subsdelivery.co.uk/wp-content/uploads/RPLC-all-sandwiches-Cchicken-bacon-ranch-594x334.jpg'
            ],
            [
                'restaurant_id' => '20',
                'name' => 'Black Forest Ham',
                'description' => 'Prosciutto Foresta Nera, Lattuga, Pomodoro, Cipolla Rossa, Cetrioli, Peperone Verde, Senape, Maionese',
                'price' => 6.49,
                'vegetarian' => 0,
                'vegan' => 0,
                'glutenfree' => 0,
                'img' => 'https://fastfoodnutrition.org/item-photos/full/167106088343351.png'
            ],


            // 21 | CAFÈ - STARBUCKS 
            [
                'restaurant_id' => '21',
                'name' => 'Pumpkin Spice Latte',
                'description' => 'Espresso, sciroppo di spezie di zucca, latte cotto a vapore, panna montata, cannella, noce moscata',
                'price' => '4.95',
                'vegetarian' => '1',
                'vegan' => '0',
                'glutenfree' => '0',
                'img' => 'https://media.timeout.com/images/105928264/750/422/image.jpg'
            ],
            [
                'restaurant_id' => '21',
                'name' => 'Caffè Latte',
                'description' => 'Espresso, latte cotto a vapore',
                'price' => '3.95',
                'vegetarian' => '1',
                'vegan' => '0',
                'glutenfree' => '1',
                'img' => 'https://www.starbuckschilled.com/globalassets/new-web/paper-straws/sbux_220ml_reskin_latte.jpg?preset=image375'
            ],
            [
                'restaurant_id' => '21',
                'name' => 'Cappuccino',
                'description' => 'Espresso, latte cotto a vapore, schiuma',
                'price' => '3.65',
                'vegetarian' => '1',
                'vegan' => '0',
                'glutenfree' => '0',
                'img' => 'https://www.starbuckschilled.com/globalassets/new-web/paper-straws/sbux_220ml_reskin_cappucino.jpg?preset=image375'
            ],
            [
                'restaurant_id' => '21',
                'name' => 'Mocha',
                'description' => 'Espresso, salsa moka, latte cotto a vapore, panna montata',
                'price' => '4.55',
                'vegetarian' => '1',
                'vegan' => '0',
                'glutenfree' => '0',
                'img' => 'https://globalassets.starbucks.com/assets/915736da018842e788147f7eab73db73.jpg?impolicy=1by1_wide_topcrop_630'
            ],
            [
                'restaurant_id' => '21',
                'name' => 'Iced Coffee',
                'description' => 'Caffè, ghiaccio',
                'price' => '2.65',
                'vegetarian' => '1',
                'vegan' => '1',
                'glutenfree' => '1',
                'img' => 'https://globalassets.starbucks.com/assets/b80d893714854b5c946ee6c7f0d369d7.jpg?impolicy=1by1_tight_288'
            ],
            [
                'restaurant_id' => '21',
                'name' => 'Green Tea Latte',
                'description' => 'Tè verde Matcha in polvere, latte cotto a vapore, dolcificante',
                'price' => '4.25',
                'vegetarian' => '1',
                'vegan' => '1',
                'glutenfree' => '0',
                'img' => 'https://globalassets.starbucks.com/assets/08f75b01cd3c46af9d8665c5912341e7.jpg?impolicy=1by1_wide_topcrop_630'
            ],
            [
                'restaurant_id' => '21',
                'name' => 'Chai Latte',
                'description' => 'Concentrato di tè Chai, latte cotto a vapore',
                'price' => '4.15',
                'vegetarian' => '1',
                'vegan' => '0',
                'glutenfree' => '0',
                'img' => 'https://globalassets.starbucks.com/assets/98c8bafe1e2241f3ad02212eca2376e3.jpg?impolicy=1by1_wide_topcrop_630'
            ],
            [
                'restaurant_id' => '21',
                'name' => 'Caramel Macchiato',
                'description' => 'Espresso, sciroppo di vaniglia, latte cotto a vapore, salsa al caramello',
                'price' => '4.75',
                'vegetarian' => '1',
                'vegan' => '0',
                'glutenfree' => '0',
                'img' => 'https://www.starbuckschilled.com/globalassets/new-web/paper-straws/sbux_220ml_reskin_caramel.jpg?preset=image375'
            ],
            [
                'restaurant_id' => '21',
                'name' => 'Frappuccino',
                'description' => 'Caffè, latte, ghiaccio, sciroppo, panna montata',
                'price' => '5.25',
                'vegetarian' => '1',
                'vegan' => '0',
                'glutenfree' => '0',
                'img' => 'https://www.digitalassets.starbucks.eu/sites/starbucks-medialibrary/files/Caramel-Frappuccino_0.jpeg'
            ],
            [
                'restaurant_id' => '21',
                'name' => 'Java Chip Frappuccino',
                'description' => 'Caffè, latte, gocce di cioccolato, sciroppo di cioccolato, panna montata',
                'price' => '5.95',
                'vegetarian' => '1',
                'vegan' => '0',
                'glutenfree' => '0',
                'img' => 'https://globalassets.starbucks.com/assets/fe3131c518c34593938b32a67486fda0.jpg?impolicy=1by1_wide_topcrop_630'
            ],
        ];
        
        foreach ($foods as $food) {

            Food::create($food);
        }
    }
}