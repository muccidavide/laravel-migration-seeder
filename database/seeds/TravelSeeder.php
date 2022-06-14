<?php
use App\Models\Travel;
use Illuminate\Database\Seeder;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travels = [
            [
                'travel_title'=>'Maldive',
                'price'=>1200,
                'image'=>'https://www.lufthansa.com/content/dam/lh/images/offers/destination/mle-square.jpg',
                'traveler_number'=> 1,
                'departure_airport'=>'Airport Malpensa - Milan',
                'departure_country'=>'Italy',
                'arrival_airport'=>'Airport Velana - Male',
                'arrival_country'=>'Maldives',
                'departure_date'=>'2022-8-4 15:00:00',
                'arrival_date'=>'2022-8-24 10:30:00',
                'transfert'=>true,
                'hotel'=>'Vera Tour Hotel',
                'hotel_services'=>'fullboard, reception 24h, spa, gym, babysitting service',
                'flight_company'=>'Ita Airways',
                'description'=>'Un mare da cartolina. Ecco, forse questa espressione l’ha coniata qualcuno non appena ha messo piede sulle bianche spiagge coralline delle Maldive. Ma qui, in realtà, tutto è da cartolina: sicuramente mare e spiagge, ma anche tramonti, paesaggi e sorrisi degli abitanti. Se ci sono posti al mondo che regalano al viaggiatore un’esperienza emozionante, di pace e benessere, uno è senza dubbio questo.',
                'children_allowed'=>true,
                'pets_allowed'=>false,
            ],
            [
                'travel_title'=>'Fuerteventura',
                'price'=>800,
                'image'=>'https://images.placesonline.com/photos/424012307180120_Betancuria_1088733455.jpg',
                'traveler_number'=> 2,
                'departure_airport'=>'Airport Malpensa - Milan',
                'departure_country'=>'Italy',
                'arrival_airport'=>'Airport Puerto del Rosario',
                'arrival_country'=>'Spain',
                'departure_date'=>'2022-8-2 8:00:00',
                'arrival_date'=>'2022-8-18 10:30:00',
                'transfert'=>false,
                'hotel'=>'Morasol Atlantico Aptos',
                'hotel_services'=>'fullboard, reception 24h, spa, gym, babysitting service',
                'flight_company'=>'Easyjet',
                'description'=>'L \'hotel sul mare Morasol Atlantico Aptos è situato nelle vicinanze di Playa De Costa Calma, una spiaggia di sabbia. Sulla spiaggia sono a disposizione sedie a sdraio e ombrelloni a pagamento. La città più vicina è Gran Tarajal. Nelle vicinanze si trovano diverse possibilità di shopping e un supermercato. ',
                'children_allowed'=>true,
                'pets_allowed'=>true,
            ],
            [
                'travel_title'=>'Amsterdam',
                'price'=>400,
                'image'=>'https://upload.wikimedia.org/wikipedia/commons/8/8e/Amsterdam_Dam_2008.jpg',
                'traveler_number'=> 2,
                'departure_airport'=>'Airport Malpensa - Milan',
                'departure_country'=>'Italy',
                'arrival_airport'=>'Airport Schipol',
                'arrival_country'=>'Holland',
                'departure_date'=>'2022-8-2 9:00:00',
                'arrival_date'=>'2022-8-18 23:30:00',
                'transfert'=>false,
                'hotel'=>'NH Hotel Amsterdam Centre',
                'hotel_services'=>'reception 24h, spa, gym',
                'flight_company'=>'Easyjet',
                'description'=>'L’hotel NH Amsterdam Centre si trova nel cuore culturale di Amsterdam. Grazie all\'ottima posizione nel meraviglioso Quartiere dei Musei, dista solo pochi passi dal museo Van Gogh. E di fronte all\'hotel, sulla sponda opposta del canale, si succedono negozi, caffè, ristoranti.',
                'children_allowed'=>true,
                'pets_allowed'=>true,
            ]
        ];

        foreach ($travels as $travel) {
            $newTravel = new Travel();
            $newTravel->travel_title = $travel['travel_title'];
            $newTravel->price = $travel['price'];
            $newTravel->image = $travel['image'];
            $newTravel->traveler_number = $travel['traveler_number'];
            $newTravel->departure_airport = $travel['departure_airport'];
            $newTravel->departure_country = $travel['departure_country'];
            $newTravel->arrival_airport = $travel['arrival_airport'];
            $newTravel->arrival_country = $travel['arrival_country'];
            $newTravel->departure_date = $travel['departure_date'];
            $newTravel->arrival_date = $travel['arrival_date'];
            $newTravel->transfert = $travel['transfert'];
            $newTravel->hotel = $travel['hotel'];
            $newTravel->hotel_services = $travel['hotel_services'];
            $newTravel->flight_company = $travel['flight_company'];
            $newTravel->description = $travel['description'];
            $newTravel->children_allowed = $travel['children_allowed'];
            $newTravel->pets_allowed = $travel['pets_allowed'];
            $newTravel->save();

        }
    }
}


