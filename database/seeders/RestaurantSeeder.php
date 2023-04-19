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
            'user_id' => '1',
            'name' => 'Ristorante da Mario',
            'slug' => 'ristorante-da-mario',
            'address' => 'Via Roma 1',
            'p_iva' => 'IT123456389',
            'phone' => '+39 012345678',
            'description' => 'Il ristorante più antico della città, con una tradizione centenaria di piatti tipici del territorio.',
            'img' => 'https://www.example.com/ristorante-mario.jpg',
        ])->types()->attach($type_id);
            
        
        $type_id = Type::find(1)->id;
        Restaurant::create([
            'user_id' => '1',
            'name' => 'La Trattoria del Sole',
            'slug' => 'la-trattoria-del-sole',
            'address' => 'Via Garibaldi 23',
            'p_iva' => 'IT987654621',
            'phone' => '+39 056789012',
            'description' => 'Una trattoria semplice e autentica, i cui piatti sono tutti preparati con ingredienti locali e stagionali.',
            'img' => 'https://www.example.com/trattoria-del-sole.jpg',
        ])->types()->attach($type_id);
            
        
        $type_id = Type::find(4)->id;
        Restaurant::create([
            'user_id' => '2',
            'name' => 'Il Ristorantino',
            'slug' => 'il-ristorantino',
            'address' => 'Via Giotto 5',
            'p_iva' => 'IT456729123',
            'phone' => '+39 034567890',
            'description' => 'Un ristorante chic e raffinato, dove la cucina moderna incontra le tradizioni gastronomiche regionali.',
            'img' => 'https://www.example.com/ristorantino.jpg',
        ])->types()->attach($type_id);
            
        
        $type_id = Type::whereIn('id', [1,9])->pluck('id')->toArray();
        Restaurant::create([
            'user_id' => '2',
            'name' => 'La Pizzeria del Corso',
            'slug' => 'la-pizzeria-del-corso',
            'address' => 'Via Dante Alighieri 11',
            'p_iva' => 'IT234569891',
            'phone' => '+39 098765432',
            'description' => 'La pizzeria più famosa della città, dove le pizze sono cotte in forno a legna e sfornate una dopo l\'altra.',
            'img' => 'https://www.example.com/pizzeria-del-corso.jpg',
        ])->types()->attach($type_id);
            
        
        $type_id = Type::whereIn('id', [1,3])->pluck('id')->toArray();
        Restaurant::create([
            'user_id' => '3',
            'name' => 'Il Bistrot',
            'slug' => 'il-bistrot',
            'address' => 'Via Verdi 8',
            'p_iva' => 'IT891274567',
            'phone' => '+39 012345678',
            'description' => 'Un bistrot di atmosfera, dove il menu è sempre diverso e stagionale e dove i cocktail sono una vera delizia.',
            'img' => 'https://www.example.com/bistrot.jpg',
        ])->types()->attach($type_id);


        $type_id = Type::find(5)->id;
        $type_id = Type::whereIn('id', [1,7])->pluck('id')->toArray();
        Restaurant::create([
            'user_id' => '3',
            'name' => 'Ristorante al Mare',
            'slug' => 'ristorante-al-mare',
            'address' => 'Lungomare Trieste, 25',
            'p_iva' => 'IT234529397',
            'phone' => '+39 02 0123456',
            'description' => 'Ristorante di pesce con vista sul mare e specialità della cucina mediterranea.',
            'img' => 'https://www.example.com/images/ristorante_al_mare.jpg'
        ])->types()->attach($type_id);


        $type_id = Type::whereIn('id', [4,7])->pluck('id')->toArray();
        Restaurant::create([
            'user_id' => '4',
            'name' => 'Il Samurai',
            'slug' => 'il-samurai',
            'address' => 'Minato Mirai 789, Yokohama',
            'p_iva' => 'IT914725806',
            'phone' => '+81 45 1234567',
            'description' => 'Specialità giapponesi preparate con maestria e servite con eleganza',
            'img' => 'https://www.example.com/images/il_samurai.jpg'
        ])->types()->attach($type_id);


        $type_id = Type::find(2)->id;
        Restaurant::create([
            'user_id' => '4',
            'name' => 'Il Dragone',
            'slug' => 'il-dragone',
            'address' => 'Via della Repubblica, 20',
            'p_iva' => 'IT901234567',
            'phone' => '+39 02 7890123',
            'description' => 'Ristorante cinese con specialità della cucina cantonese, sichuan e shanghainese.',
            'img' => 'https://www.example.com/images/ristorante_cinese.jpg'
        ])->types()->attach($type_id);


        $type_id = Type::whereIn('id', [1,8])->pluck('id')->toArray();
        Restaurant::create([
            'user_id' => '5',
            'name' => 'Il Grottino',
            'slug' => 'il-grottino',
            'address' => 'Via dei Cacciatori, 15',
            'p_iva' => 'IT678901234',
            'phone' => '+39 02 4567890',
            'description' => 'Ristorante con cucina toscana e cantina con ampia selezione di vini.',
            'img' => 'https://www.example.com/images/il_grottino.jpg'
        ])->types()->attach($type_id);


        $type_id = Type::find(5)->id;
        Restaurant::create([
            'user_id' => '5',
            'name' => 'La Hacienda',
            'slug' => 'la-hacienda',
            'address' => 'Avenida Reforma 123, Città del Messico',
            'p_iva' => 'IT125836902',
            'phone' => '+52 55 1234567',
            'description' => 'Cucina messicana tradizionale, rivisitata con un tocco di creatività',
            'img' => 'https://www.example.com/images/la_hacienda.jpg'
        ])->types()->attach($type_id);
    }
}
