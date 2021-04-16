<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create(['nama' => 'Seremban']);
        City::create(['nama' => 'Shah Alam']);
        City::create(['nama' => 'Puchong']);
        City::create(['nama' => 'Port Dickson']);
        City::create(['nama' => 'Klang']);
    }
}
