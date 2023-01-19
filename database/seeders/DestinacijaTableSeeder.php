<?php

namespace Database\Seeders;

use App\Models\Destinacija;
use Illuminate\Database\Seeder;

class DestinacijaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Destinacija::create([
            'destinacija' => 'Berlin',
            'drzava' => 'Nemacka',
            'datum' => '01.02.2023.'
        ]);

        Destinacija::create([
            'destinacija' => 'London',
            'drzava' => 'Velika Britanija',
            'datum' => '20.02.2023.'
        ]);

        Destinacija::create([
            'destinacija' => 'Istanbul',
            'drzava' => 'Turska',
            'datum' => '28.02.2023.'
        ]);

        Destinacija::create([
            'destinacija' => 'Pariz',
            'drzava' => 'Francuska',
            'datum' => '01.03.2023.'
        ]);

        Destinacija::create([
            'destinacija' => 'New York',
            'drzava' => 'SAD',
            'datum' => '09.03.2023.'
        ]);


    }
}
