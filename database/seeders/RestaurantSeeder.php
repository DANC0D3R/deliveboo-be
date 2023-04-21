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
        // 1
        $type_id = Type::whereIn('id', [7,12,17])->pluck('id')->toArray();
        Restaurant::create([
            'user_id' => '1',
            'name' => 'Ristorante da Mario',
            'slug' => 'ristorante-da-mario',
            'address' => 'Via Roma 1, Roma, Italia',
            'p_iva' => 'IT123456389',
            'phone' => '+39 02 2345678',
            'description' => 'Il ristorante più antico della città, con una tradizione centenaria di piatti tipici del territorio.',
            'img' => 'https://media-cdn.tripadvisor.com/media/photo-s/19/37/9e/2b/accoccolato-nel-cuore.jpg',
        ])->types()->attach($type_id);
        
        // 2
        $type_id = Type::whereIn('id', [7,12])->pluck('id')->toArray();
        Restaurant::create([
            'user_id' => '2',
            'name' => 'Il Ristorantino',
            'slug' => 'il-ristorantino',
            'address' => 'Via Giotto 5, Firenze, Italia',
            'p_iva' => 'IT123456780',
            'phone' => '+39 034 567890',
            'description' => 'Un ristorante chic e raffinato, dove la cucina moderna che comprende anche tante opzioni vegetariane e vegane.',
            'img' => 'https://www.grazia.it/content/uploads/2022/07/ristorante-baia-sul-lago.jpg',
        ])->types()->attach($type_id);
            
        // 3
        $type_id = Type::whereIn('id', [7,11,17])->pluck('id')->toArray();
        Restaurant::create([
            'user_id' => '3',
            'name' => 'La Pizzeria del Corso',
            'slug' => 'la-pizzeria-del-corso',
            'address' => 'Via Partenope 10, Napoli, Italia',
            'p_iva' => 'IT123456781',
            'phone' => '+39 081 765432',
            'description' => 'La pizzeria più famosa della città, dove le pizze sono cotte in forno a legna e sfornate una dopo l\'altra.',
            'img' => 'https://media-cdn.tripadvisor.com/media/photo-s/16/ae/e5/9a/eccoci.jpg',
        ])->types()->attach($type_id);

        // 4
        $type_id = Type::whereIn('id', [5,17])->pluck('id')->toArray();
        Restaurant::create([
            'user_id' => '4',
            'name' => 'Il Samurai',
            'slug' => 'il-samurai',
            'address' => 'Minato Mirai 789, Tokyo, Giappone',
            'p_iva' => 'JP123456789',
            'phone' => '+81 45 1234567',
            'description' => 'Specialità giapponesi preparate con maestria e servite con eleganza',
            'img' => 'https://res.cloudinary.com/tf-lab/image/upload/w_600,h_337,c_fill,q_auto,f_auto/restaurant/f49c9886-7b0b-48eb-a7aa-8050a79e143c/56e61c15-2506-4984-930b-d0a2f3ae8fe5.jpg'
        ])->types()->attach($type_id);

        // 5
        $type_id = Type::whereIn('id', [10,17])->pluck('id')->toArray();
        Restaurant::create([
            'user_id' => '5',
            'name' => 'La Hacienda',
            'slug' => 'la-hacienda',
            'address' => 'Avenida Reforma 123, Città del Messico, Messico',
            'p_iva' => 'MI123456789',
            'phone' => '+52 55 1234567',
            'description' => 'Cucina messicana tradizionale, rivisitata con un tocco di creatività',
            'img' => 'https://images.squarespace-cdn.com/content/v1/5ac54d2e4611a0382c06da9c/1547721417713-88LDTOJB0NPMWEI4ZT6N/37307918_251995848963956_4114157539434692608_n.jpg'
        ])->types()->attach($type_id);

        // 6
        $type_id = Type::whereIn('id', [12,16,17])->pluck('id')->toArray();
        Restaurant::create([
            'user_id' => '6',
            'name' => 'Le Du Restaurant',
            'slug' => 'le-du-restaurant',
            'address' => '399/3 Silom 7 Alley, Bangkok, Thailandia',
            'p_iva' => 'TN123456789',
            'phone' => '+1 12 3269452',
            'description' => 'Le Du, nome derivante da una parola tailandese sinonimo della parola “stagione” riflette un’enfasi sulle nostre creazioni culinarie con prodotti di stagione, è un moderno ristorante di ispirazione thailandese. Proponiamo 4 portate e menù degustazione caratterizzati dalla straordinaria generosità agricola della Thailandia e dalle culture culinarie secolari che qui hanno messo radici.',
            'img' => 'https://d5xydlzdo08s0.cloudfront.net/media/celebrities/17488/ledu_logo_300x300__L.jpg'
        ])->types()->attach($type_id);

        // 7
        $type_id = Type::whereIn('id', [2,17])->pluck('id')->toArray();
        Restaurant::create([
            'user_id' => '7',
            'name' => 'Drago D\'oro',
            'slug' => 'drago-d-oro',
            'address' => 'Wangfujing Street 23, Pechino, Cina',
            'p_iva' => 'CN123456789',
            'phone' => '+1 43 9734163',
            'description' => 'Scopri nuovi sapori della cucina cantonese e cinese nel confort del ristorante Drago d\'Oro',
            'img' => 'https://img1.spiiky.com/users/19/129976_b2caead55bb7401694deb9158704fe54.jpg'
        ])->types()->attach($type_id);

        // 8
        $type_id = Type::whereIn('id', [8,17])->pluck('id')->toArray();
        Restaurant::create([
            'user_id' => '8',
            'name' => 'Taj Mahal Palace Hotel Restaurant',
            'slug' => 'taj-mahal-palace-hotel-restaurant',
            'address' => 'Apollo Bandar 65, Mumbai, India',
            'p_iva' => 'IN123456789',
            'phone' => '+1 72 0192542',
            'description' => 'Scopri le stuzzicanti cucine indiana, mediorientale e orientale, servite con un pizzico di tradizione e una spruzzata di innovazione.',
            'img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Mumbai_Aug_2018_%2843397784544%29.jpg/1200px-Mumbai_Aug_2018_%2843397784544%29.jpg'
        ])->types()->attach($type_id);

        // 9
        $type_id = Type::whereIn('id', [6,12])->pluck('id')->toArray();
        Restaurant::create([
            'user_id' => '9',
            'name' => 'The Funky Gourmet',
            'slug' => 'the-funky-gourmet',
            'address' => 'Παραμυθιάς 13 και, Atene, Grecia',
            'p_iva' => 'GR123456789',
            'phone' => '+1 54 4637289',
            'description' => 'La nostra filosofia, è meglio descritta dal nome del ristorante. Noi crediamo in una cucina che sia Funchy, di tradizione riadattata all’oggi e, Gourmet, secondo il gusto più raffinato. Un’espressione giocosa, non convenzionale, una cucina di avanguardia capace di evocare emozioni stimolandone i ricordi. Sapori originali ben calibrati si adattano perfettamente alla ricercata teatralità del manufatto',
            'img' => 'https://whyathens.com/wp-content/uploads/2018/09/Funky-Gourmet-Athens-Orange-Explosion-I.jpg'
        ])->types()->attach($type_id);

        // 10
        $type_id = Type::whereIn('id', [4,12,17])->pluck('id')->toArray();
        Restaurant::create([
            'user_id' => '10',
            'name' => 'L\'Ambroisie',
            'slug' => 'l-ambroisie',
            'address' => '9 Pl. des Vosges, Parigi, Francia',
            'p_iva' => 'FR123456789',
            'phone' => '+1 92 9823545',
            'description' => '"Cucina di civiltà" Alla ricerca del bellissimo prodotto. Cucinare senza affetto. Offri semplicemente il meglio. Nel corso delle stagioni, l\'evidenza della semplicità e la sublimazione del prodotto sono il frutto del connubio sempre rinnovato tra ricerca dell\'eccellenza e rispetto della tradizione.',
            'img' => 'https://www.ambroisie-paris.com/wp-content/themes/ambroisie/img/mgsrc.jpg'
        ])->types()->attach($type_id);

        // 11
        $type_id = Type::whereIn('id', [12,15])->pluck('id')->toArray();
        Restaurant::create([
            'user_id' => '11',
            'name' => '360 Istanbul',
            'slug' => '360-istanbul',
            'address' => 'Tomtom Mah. İstiklal Cad. No:163 K: 8, Istanbul, Turchia',
            'p_iva' => 'TR123456789',
            'phone' => '+1 65 9287645',
            'description' => 'I fattori CIBO, INTRATTENIMENTO, AMBIENTE e ATMOSFERA costituiscono la base del concetto di 360 Istanbul, sviluppato dal team di professionisti esperti e competenti di 360 Entertainment Group. Il fatto che ogni fattore sia ugualmente importante e si completi a vicenda assicura che possiamo massimizzare la soddisfazione del cliente portando il concetto in un tutto',
            'img' => 'https://www.therooftopguide.com/rooftop-bars-in-istanbul/Bilder/360-istanbul-600-1.jpg'
        ])->types()->attach($type_id);

        // 12
        $type_id = Type::whereIn('id', [9,12])->pluck('id')->toArray();
        Restaurant::create([
            'user_id' => '12',
            'name' => 'Al Halabi Restaurant',
            'slug' => 'al-halabi-restaurant',
            'address' => 'Antelias, Libano',
            'p_iva' => 'LB123456789',
            'phone' => '+1 21 2332633',
            'description' => 'Al Halabi è uno dei ristoranti più antichi del Libano. La classica cucina libanese con piatti d\'autore ',
            'img' => 'https://alhalabirestaurant.com/wp-content/uploads/2020/02/exterior-e1583157523582.png'
        ])->types()->attach($type_id);

        // 13
        $type_id = Type::whereIn('id', [12,17,18])->pluck('id')->toArray();
        Restaurant::create([
            'user_id' => '13',
            'name' => 'Temple Club',
            'slug' => 'temple-club',
            'address' => '29-31 Tôn Thất Thiệp, Thành phố Hồ Chí Minh, Vietnam',
            'p_iva' => 'VN123456789',
            'phone' => '+1 63 0987653',
            'description' => 'L\'affascinante e suggestivo Temple Club, che occupa un edificio storico, ha superato la prova del tempo a Ho Chi Minh City. Laciatevi affascinare dal corridoio illuminato da lanterne attraverso il quale si accede al ristorante con arredi ispirati all\'arte asiatica in stile coloniale e godete di deliziosi piatti classici vietnamiti',
            'img' => 'https://www.asia-bars.com/wp-content/uploads/2010/08/Temple-club-bar00181.jpg'
        ])->types()->attach($type_id);

        // 14
        $type_id = Type::find(13)->id;
        Restaurant::create([
            'user_id' => '14',
            'name' => 'Nusr-Et Steakhouse',
            'slug' => 'nusr-et-steakhouse',
            'address' => ' Restaurant Village Four Seasons Resort, Dubai, Emirati Arabi Uniti',
            'p_iva' => 'AE123456789',
            'phone' => '+1 76 1239542',
            'description' => 'Uno spettacolare banchetto di carne... per tutti i tuoi sensi',
            'img' => 'https://criocabin.com/wp-content/uploads/2021/06/NUSRET-DUBAI-Criocabin-Etoile-1-scaled.jpg'
        ])->types()->attach($type_id);

        // 15
        $type_id = Type::whereIn('id', [7,11,12,14])->pluck('id')->toArray();
        Restaurant::create([
            'user_id' => '15',
            'name' => 'Rosso Pomodoro',
            'slug' => 'rosso-pomodoro',
            'address' => 'Corso Umberto 1, Napoli, Italia',
            'p_iva' => 'IT123456784',
            'phone' => '+39 33 4352634',
            'description' => 'Come un giorno a Napoli',
            'img' => 'https://claudiotroisi.it/wp-content/uploads/2021/02/Logo-Starbucks-1.png'
        ])->types()->attach($type_id);

        // 16
        $type_id = Type::whereIn('id', [3,14])->pluck('id')->toArray();
        Restaurant::create([
            'user_id' => '16',
            'name' => 'Mc Donald\'s',
            'slug' => 'mc-donalds',
            'address' => '1398 N E Street, San Bernardino, Stati Uniti',
            'p_iva' => 'US123456789',
            'phone' => '+1 82 9432954',
            'description' => 'I\'m lovin\' it',
            'img' => 'https://ilfattoalimentare.it/wp-content/uploads/2015/06/McDonalds_logo.svg_.png'
        ])->types()->attach($type_id);

        // 17
        $type_id = Type::whereIn('id', [3,14])->pluck('id')->toArray();
        Restaurant::create([
            'user_id' => '17',
            'name' => 'Burger King',
            'slug' => 'burger-king',
            'address' => '2576 S W Street, Miami, Stati Uniti',
            'p_iva' => 'US123456780',
            'phone' => '+1 19 1732543',
            'description' => 'Have it your way',
            'img' => 'https://maximoshopping.it/wp-content/uploads/media/negozi/logo/logo-burger-king-600x450.png'
        ])->types()->attach($type_id);

        // 18
        $type_id = Type::whereIn('id', [3,11,14])->pluck('id')->toArray();
        Restaurant::create([
            'user_id' => '18',
            'name' => 'Pizza Hut',
            'slug' => 'pizza-hut',
            'address' => '1877 W. 21st Street North, Wichita, Stati Uniti',
            'p_iva' => 'US123456781',
            'phone' => '+1 43 7256433',
            'description' => 'No one outpizzas the hut',
            'img' => 'https://upload.wikimedia.org/wikipedia/commons/5/5d/Pizza_Hut_classic_logo.svg'
        ])->types()->attach($type_id);

        // 19
        $type_id = Type::whereIn('id', [3,14])->pluck('id')->toArray();
        Restaurant::create([
            'user_id' => '19',
            'name' => 'KFC',
            'slug' => 'kfc',
            'address' => 'Shell Station, Corbin, Stati Uniti',
            'p_iva' => 'US123456782',
            'phone' => '+1 74 1209724',
            'description' => 'Finger Lickin\' Good!',
            'img' => 'https://1000marche.net/wp-content/uploads/2020/03/KFC-2006-logo.jpg'
        ])->types()->attach($type_id);

        // 20
        $type_id = Type::whereIn('id', [3,11,14])->pluck('id')->toArray();
        Restaurant::create([
            'user_id' => '20',
            'name' => 'Subway',
            'slug' => 'subway',
            'address' => 'Bridgeport, Stati Uniti',
            'p_iva' => 'US123456783',
            'phone' => '+1 55 9427493',
            'description' => 'Eat fresh',
            'img' => 'https://centaur-wp.s3.eu-central-1.amazonaws.com/designweek/prod/content/uploads/2016/08/09165704/new-subway%C2%AE-retaurants-logo-5-HR.jpg'
        ])->types()->attach($type_id);

        // 21
        $type_id = Type::find(1)->id;
        Restaurant::create([
            'user_id' => '21',
            'name' => 'Starbucks',
            'slug' => 'starbucks',
            'address' => '1124 Pike St, Seattle, Stati Uniti',
            'p_iva' => 'US123456784',
            'phone' => '+1 82 4352634',
            'description' => 'It\'s bigger than coffee',
            'img' => 'https://claudiotroisi.it/wp-content/uploads/2021/02/Logo-Starbucks-1.png'
        ])->types()->attach($type_id);
    }
}
