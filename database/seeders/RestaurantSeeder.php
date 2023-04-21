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
            'img' => 'https://media-cdn.tripadvisor.com/media/photo-s/19/37/9e/2b/accoccolato-nel-cuore.jpg',
        ])->types()->attach($type_id);
        
        $type_id = Type::find(1)->id;
        Restaurant::create([
            'user_id' => '2',
            'name' => 'Il Ristorantino',
            'slug' => 'il-ristorantino',
            'address' => 'Via Giotto 5',
            'p_iva' => 'IT456729123',
            'phone' => '+39 034567890',
            'description' => 'Un ristorante chic e raffinato, dove la cucina moderna che comprende anche tante opzioni vegetariane e vegane.',
            'img' => 'https://www.grazia.it/content/uploads/2022/07/ristorante-baia-sul-lago.jpg',
        ])->types()->attach($type_id);
            
        
        $type_id = Type::whereIn('id', [1,9])->pluck('id')->toArray();
        Restaurant::create([
            'user_id' => '3',
            'name' => 'La Pizzeria del Corso',
            'slug' => 'la-pizzeria-del-corso',
            'address' => 'Via Dante Alighieri 11',
            'p_iva' => 'IT234569891',
            'phone' => '+39 098765432',
            'description' => 'La pizzeria più famosa della città, dove le pizze sono cotte in forno a legna e sfornate una dopo l\'altra.',
            'img' => 'https://media-cdn.tripadvisor.com/media/photo-s/16/ae/e5/9a/eccoci.jpg',
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
            'img' => 'https://res.cloudinary.com/tf-lab/image/upload/w_600,h_337,c_fill,q_auto,f_auto/restaurant/f49c9886-7b0b-48eb-a7aa-8050a79e143c/56e61c15-2506-4984-930b-d0a2f3ae8fe5.jpg'
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
            'img' => 'https://images.squarespace-cdn.com/content/v1/5ac54d2e4611a0382c06da9c/1547721417713-88LDTOJB0NPMWEI4ZT6N/37307918_251995848963956_4114157539434692608_n.jpg'
        ])->types()->attach($type_id);
    }
}
