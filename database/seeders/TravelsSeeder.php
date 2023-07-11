<?php

namespace Database\Seeders;

use App\Models\Travel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TravelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Travel::create([
            'title' => 'Il mio viaggio a Parigi',
            'travel_date' => '2011-08-05',
            'memories_to_remind' => 'Tour Eiffel, DisneyLand Paris',
            'place' => 'Parigi'
        ]);

        Travel::create([
            'title' => 'Road trip in Italia ',
            'travel_date' => '2022-08-10',
            'memories_to_remind' => 'La fiorentina, Il museo degli Uffizi, GardaLand , La mostra su Leonardo Da Vinci ',
            'place' => 'Firenze,Garda,Vinci,Riccione'
        ]);

        Travel::create([
            'title' => 'Visita ai parenti in Sri-lanka',
            'travel_date' => '2016-06-20',
            'memories_to_remind' => 'Lo zoo, Il mare, I nonni ',
            'place' => 'Sri-Lanka'
        ]);
    }
}
