<?php

namespace Database\Seeders;

// model
use App\Models\Restaurant;
use App\Models\Type;
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
         
            $type_id = Type::whereIn('id', [1,3])->pluck('id')->toArray();
            Restaurant::create([
                'name' => 'Ristorante da Alberto',
                'slug' => 'ristorante-da-alberto',
                'address' => 'Via Roma 1',
                'p_iva' => 'IT123456389',
                'phone' => '+39 012345678',
                'description' => 'Il ristorante più antico della città, con una tradizione centenaria di piatti tipici del territorio.',
                'img' => 'https://www.example.com/ristorante-mario.jpg',
                'user_id' => 1,
            ])->types()->attach($type_id);
                
            
            $type_id = Type::find(6)->id;
            Restaurant::create([
                'name' => 'Ristorante da Zineb',
                'slug' => 'ristorante-da-zineb',
                'address' => 'Via Garibaldi 23',
                'p_iva' => 'IT987654621',
                'phone' => '+39 056789012',
                'description' => 'Una trattoria semplice e autentica, i cui piatti sono tutti preparati con ingredienti locali e stagionali.',
                'img' => 'https://www.example.com/trattoria-del-sole.jpg',
                'user_id' => 2
            ])->types()->attach($type_id);
                
            
            $type_id = Type::whereIn('id', [2,5])->pluck('id')->toArray();
            Restaurant::create([
                'name' => 'Ristorante da Lorenzo ',
                'slug' => 'ristorante-da-lorenzo',
                'address' => 'Via Giotto 5',
                'p_iva' => 'IT456729123',
                'phone' => '+39 034567890',
                'description' => 'Un ristorante chic e raffinato, dove la cucina moderna incontra le tradizioni gastronomiche regionali.',
                'img' => 'https://www.example.com/ristorantino.jpg',
                'user_id' => 3
            ])->types()->attach($type_id);
                
            
            $type_id = Type::whereIn('id', [6,7])->pluck('id')->toArray();
            Restaurant::create([
                'name' => 'Ristorante da Daniele',
                'slug' => 'ristorante-da-daniele',
                'address' => 'Via Dante Alighieri 11',
                'p_iva' => 'IT234569891',
                'phone' => '+39 098765432',
                'description' => 'La pizzeria più famosa della città, dove le pizze sono cotte in forno a legna e sfornate una dopo l\'altra.',
                'img' => 'https://www.example.com/pizzeria-del-corso.jpg',
                'user_id' => 4,
            ])->types()->attach($type_id);
                
            
            $type_id = Type::whereIn('id', [6,7])->pluck('id')->toArray();
            Restaurant::create([
                'name' => 'Ristorante da Davide',
                'slug' => 'ristorante-da-davide',
                'address' => 'Via Verdi 8',
                'p_iva' => 'IT891274567',
                'phone' => '+39 012345678',
                'description' => 'Un bistrot di atmosfera, dove il menu è sempre diverso e stagionale e dove i cocktail sono una vera delizia.',
                'img' => 'https://www.example.com/bistrot.jpg',
                'user_id' => 5,
            ])->types()->attach($type_id);
                
            
        

    }
}
