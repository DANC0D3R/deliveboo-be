<?php

namespace Database\Seeders;

// model
use App\Models\Restaurant;

// helpers
use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = [
            [
                'name' => 'Ristorante da Mario',
                'slug' => '',
                'address' => 'Via Roma 1',
                'p_iva' => 'IT123456389',
                'phone' => '+39 012345678',
                'description' => 'Il ristorante più antico della città, con una tradizione centenaria di piatti tipici del territorio.',
                'img' => 'https://www.example.com/ristorante-mario.jpg',
            ],
            [
                'name' => 'La Trattoria del Sole',
                'slug' => '',
                'address' => 'Via Garibaldi 23',
                'p_iva' => 'IT987654621',
                'phone' => '+39 056789012',
                'description' => 'Una trattoria semplice e autentica, i cui piatti sono tutti preparati con ingredienti locali e stagionali.',
                'img' => 'https://www.example.com/trattoria-del-sole.jpg',
            ],
            [
                'name' => 'Il Ristorantino',
                'slug' => 'ristorantino',
                'address' => 'Via Giotto 5',
                'p_iva' => 'IT456729123',
                'phone' => '+39 034567890',
                'description' => 'Un ristorante chic e raffinato, dove la cucina moderna incontra le tradizioni gastronomiche regionali.',
                'img' => 'https://www.example.com/ristorantino.jpg',
            ],
            [
                'name' => 'La Pizzeria del Corso',
                'slug' => 'pizzeria-del-corso',
                'address' => 'Via Dante Alighieri 11',
                'p_iva' => 'IT234569891',
                'phone' => '+39 098765432',
                'description' => 'La pizzeria più famosa della città, dove le pizze sono cotte in forno a legna e sfornate una dopo l\'altra.',
                'img' => 'https://www.example.com/pizzeria-del-corso.jpg',
            ],
            [
                'name' => 'Il Bistrot',
                'slug' => 'bistrot',
                'address' => 'Via Verdi 8',
                'p_iva' => 'IT891274567',
                'phone' => '+39 012345678',
                'description' => 'Un bistrot di atmosfera, dove il menu è sempre diverso e stagionale e dove i cocktail sono una vera delizia.',
                'img' => 'https://www.example.com/bistrot.jpg',
            ],
        ];

        foreach($restaurants as $restaurant) {
            // prima versisone
            // $newRestaurant = new Restaurant;
            // $newRestaurant->name=$restaurant['name'];
            // $newRestaurant->slug=$restaurant['slug'];
            // $newRestaurant->address=$restaurant['address'];
            // $newRestaurant->p_iva=$restaurant['p_iva'];
            // $newRestaurant->phone=$restaurant['phone'];
            // $newRestaurant->description=$restaurant['description'];
            // $newRestaurant->img=$restaurant['img'];
            // $newRestaurant->save();

            // seconda versione
            $name = $restaurant['name'];

            Restaurant::create([
                'name'=>$name,
                'slug'=>Str::slug($name),
                'address'=>$restaurant['address'],
                'p_iva'=>$restaurant['p_iva'],
                'phone'=>$restaurant['phone'],
                'description'=>$restaurant['description'],
                'img'=>$restaurant['img'],
            ]);
        }
    }
}
